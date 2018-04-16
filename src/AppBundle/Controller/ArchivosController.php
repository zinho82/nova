<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\View\TwitterBootstrap3View;
use Symfony\Component\HttpFoundation\Response;
use BackendBundle\Entity\Lotes;
use BackendBundle\Entity\Archivos;

/**
 * Archivos controller.
 *
 */
class ArchivosController extends Controller {

    /**
     * Lists all Archivos entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('BackendBundle:Archivos')->createQueryBuilder('e');
        $archivo = new Archivos();
        list($filterForm, $queryBuilder) = $this->filter($queryBuilder, $request);
        list($archivos, $pagerHtml) = $this->paginator($queryBuilder, $request);
        $form = $this->createForm('AppBundle\Form\ArchivosUploadType', $archivo);
        $form->handleRequest($request);
        $totalOfRecordsString = $this->getTotalOfRecordsString($queryBuilder, $request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Recogemos el fichero
            $file = $form['archivo']->getData();

// Sacamos la extensión del fichero
            $ext = $file->guessExtension();

// Le ponemos un nombre al fichero
            $file_name = time() . "." . $ext;

// Guardamos el fichero en el directorio uploads que estará en el directorio /web del framework
            $file->move("uploads/lotes", $file_name);
// Establecemos el nombre de fichero en el atributo de la entidad
            $archivo->setArchivo($file_name);
            $archivo->setFechaCarga(new \DateTime);
            $archivo->setUsuario($this->getUser());
            $archivo->setNombrearchivo($file->getClientOriginalName());
            $archivo->setTipo("Carga Lotes");
            $em->persist($archivo);
            $em->flush($archivo);
        }
        return $this->render('AppBundle:archivos:index.html.twig', array(
                    'archivos' => $archivos,
                    'pagerHtml' => $pagerHtml,
                    'filterForm' => $filterForm->createView(),
                    'totalOfRecordsString' => $totalOfRecordsString,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Create filter form and process filter request.
     *
     */
    protected function filter($queryBuilder, Request $request) {
        $session = $request->getSession();
        $filterForm = $this->createForm('AppBundle\Form\ArchivosFilterType');

        // Reset filter
        if ($request->get('filter_action') == 'reset') {
            $session->remove('ArchivosControllerFilter');
        }

        // Filter action
        if ($request->get('filter_action') == 'filter') {
            // Bind values from the request
            $filterForm->handleRequest($request);

            if ($filterForm->isValid()) {
                // Build the query from the given form object
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
                // Save filter to session
                $filterData = $filterForm->getData();
                $session->set('ArchivosControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('ArchivosControllerFilter')) {
                $filterData = $session->get('ArchivosControllerFilter');

                foreach ($filterData as $key => $filter) { //fix for entityFilterType that is loaded from session
                    if (is_object($filter)) {
                        $filterData[$key] = $queryBuilder->getEntityManager()->merge($filter);
                    }
                }

                $filterForm = $this->createForm('AppBundle\Form\ArchivosFilterType', $filterData);
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
            }
        }

        return array($filterForm, $queryBuilder);
    }

    /**
     * Get results from paginator and get paginator view.
     *
     */
    protected function paginator($queryBuilder, Request $request) {
        //sorting
        $sortCol = $queryBuilder->getRootAlias() . '.' . $request->get('pcg_sort_col', 'id');
        $queryBuilder->orderBy($sortCol, $request->get('pcg_sort_order', 'desc'));
        // Paginator
        $adapter = new DoctrineORMAdapter($queryBuilder);
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage($request->get('pcg_show', 10));

        try {
            $pagerfanta->setCurrentPage($request->get('pcg_page', 1));
        } catch (\Pagerfanta\Exception\OutOfRangeCurrentPageException $ex) {
            $pagerfanta->setCurrentPage(1);
        }

        $entities = $pagerfanta->getCurrentPageResults();

        // Paginator - route generator
        $me = $this;
        $routeGenerator = function($page) use ($me, $request) {
            $requestParams = $request->query->all();
            $requestParams['pcg_page'] = $page;
            return $me->generateUrl('archivos', $requestParams);
        };

        // Paginator - view
        $view = new TwitterBootstrap3View();
        $pagerHtml = $view->render($pagerfanta, $routeGenerator, array(
            'proximity' => 3,
            'prev_message' => 'previous',
            'next_message' => 'next',
        ));

        return array($entities, $pagerHtml);
    }

    /*
     * Calculates the total of records string
     */

    protected function getTotalOfRecordsString($queryBuilder, $request) {
        $totalOfRecords = $queryBuilder->select('COUNT(e.id)')->getQuery()->getSingleScalarResult();
        $show = $request->get('pcg_show', 10);
        $page = $request->get('pcg_page', 1);

        $startRecord = ($show * ($page - 1)) + 1;
        $endRecord = $show * $page;

        if ($endRecord > $totalOfRecords) {
            $endRecord = $totalOfRecords;
        }
        return "Showing $startRecord - $endRecord of $totalOfRecords Records.";
    }

    /**
     * Displays a form to create a new Archivos entity.
     *
     */
    public function newAction(Request $request) {

        $archivo = new Archivos();
        $form = $this->createForm('AppBundle\Form\ArchivosType', $archivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($archivo);
            $em->flush();

            $editLink = $this->generateUrl('archivos_edit', array('id' => $archivo->getId()));
            $this->get('session')->getFlashBag()->add('success', "<a href='$editLink'>New archivo was created successfully.</a>");

            $nextAction = $request->get('submit') == 'save' ? 'archivos' : 'archivos_new';
            return $this->redirectToRoute($nextAction);
        }
        return $this->render('AppBundle:archivos:new.html.twig', array(
                    'archivo' => $archivo,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Archivos entity.
     *
     */
    public function showAction(Archivos $archivo) {
        $deleteForm = $this->createDeleteForm($archivo);
        return $this->render('AppBundle:archivos:show.html.twig', array(
                    'archivo' => $archivo,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Archivos entity.
     *
     */
    public function editAction(Request $request, Archivos $archivo) {
        $deleteForm = $this->createDeleteForm($archivo);
        $editForm = $this->createForm('AppBundle\Form\ArchivosType', $archivo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($archivo);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Edited Successfully!');
            return $this->redirectToRoute('archivos_edit', array('id' => $archivo->getId()));
        }
        return $this->render('AppBundle:archivos:edit.html.twig', array(
                    'archivo' => $archivo,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Archivos entity.
     *
     */
    public function deleteAction(Request $request, Archivos $archivo) {

        $form = $this->createDeleteForm($archivo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($archivo);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'The Archivos was deleted successfully');
        } else {
            $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the Archivos');
        }

        return $this->redirectToRoute('archivos');
    }

    /**
     * Creates a form to delete a Archivos entity.
     *
     * @param Archivos $archivo The Archivos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Archivos $archivo) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('archivos_delete', array('id' => $archivo->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

    /**
     * Delete Archivos by id
     *
     */
    public function deleteByIdAction(Archivos $archivo) {
        $em = $this->getDoctrine()->getManager();

        try {
            $em->remove($archivo);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'The Archivos was deleted successfully');
        } catch (Exception $ex) {
            $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the Archivos');
        }

        return $this->redirect($this->generateUrl('archivos'));
    }

    /**
     * Bulk Action
     */
    public function bulkAction(Request $request) {
        $ids = $request->get("ids", array());
        $action = $request->get("bulk_action", "delete");

        if ($action == "delete") {
            try {
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('BackendBundle:Archivos');

                foreach ($ids as $id) {
                    $archivo = $repository->find($id);
                    $em->remove($archivo);
                    $em->flush();
                }

                $this->get('session')->getFlashBag()->add('success', 'archivos was deleted successfully!');
            } catch (Exception $ex) {
                $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the archivos ');
            }
        }

        return $this->redirect($this->generateUrl('archivos'));
    }

    public function uploadAction(Request $request, $id = null) {
        $em = $this->getDoctrine()->getManager();
        $archivo = $em->getRepository("BackendBundle:Archivos")->find($id);
        $fp = fopen("uploads/lotes/" . $archivo->getarchivo(), "r");
        $lote = new lotes();
        if (($gestor = fopen("uploads/lotes/" . $archivo->getarchivo(), "r")) !== FALSE) {
            while (($da = fgetcsv($gestor, 1000, ";")) !== FALSE) {
                $lote->setContainer($da[0]);
                $lote->setNumberPallets($da[1]);
                $lote->setTemplateNumber($da[2]);
                $lote->setPackingDate($da[3]);
                $lote->setLabel($da[4]);
                $lote->setComoditty($da[5]);
                $lote->setVariety($da[6]);
                $lote->setPack($da[7]);
                $lote->setPlu($da[8]);
                $lote->setQuality($da[9]);
                $lote->setScore($da[10]);
                $lote->setNumBoxes($da[11]);
                $lote->setGrowerCode($da[12]);
                $lote->setGrowersName($da[13]);
                $lote->setExportador($da[14]);
                $lote->setConsignne($da[15]);
                $lote->setVessel($da[16]);
                $lote->setPol($da[17]);
                $lote->setEtd($da[18]);
                $lote->setPod($da[19]);
                $lote->setEta($da[20]);
                $lote->setFechaCarga(new \DateTime);
                $lote->setEjecutivo($this->getUser());
                
                $em->persist($lote);
                if($em->flush($lote)==null){
                    echo "<br>guardado $da[1]<br>";
                }else{
                     echo "<br>NO guardado $da[1]<br>";
                }
            }
        } else {
            echo "error archivo no abierto";
        }

        fclose($fp);
        return new Response();
    }

}
