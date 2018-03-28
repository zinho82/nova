<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\View\TwitterBootstrap3View;
use BackendBundle\Entity\Lotes;
use BackendBundle\Entity\Archivos;
/**
 * Lotes controller.
 *
 */
class LotesController extends Controller {

    /**
     * Lists all Lotes entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('BackendBundle:Lotes')->createQueryBuilder('e')
                ->orderBy('dte', 'desc')
        ;

        list($filterForm, $queryBuilder) = $this->filter($queryBuilder, $request);
        list($lotes, $pagerHtml) = $this->paginator($queryBuilder, $request);

        $totalOfRecordsString = $this->getTotalOfRecordsString($queryBuilder, $request);

        return $this->render('AppBundle:lotes:index.html.twig', array(
                    'lotes' => $lotes,
                    'pagerHtml' => $pagerHtml,
                    'filterForm' => $filterForm->createView(),
                    'totalOfRecordsString' => $totalOfRecordsString,
        ));
    }

    /**
     * Create filter form and process filter request.
     *
     */
    protected function filter($queryBuilder, Request $request) {
        $session = $request->getSession();
        $filterForm = $this->createForm('AppBundle\Form\LotesFilterType');

        // Reset filter
        if ($request->get('filter_action') == 'reset') {
            $session->remove('LotesControllerFilter');
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
                $session->set('LotesControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('LotesControllerFilter')) {
                $filterData = $session->get('LotesControllerFilter');

                foreach ($filterData as $key => $filter) { //fix for entityFilterType that is loaded from session
                    if (is_object($filter)) {
                        $filterData[$key] = $queryBuilder->getEntityManager()->merge($filter);
                    }
                }

                $filterForm = $this->createForm('AppBundle\Form\LotesFilterType', $filterData);
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
            return $me->generateUrl('lotes', $requestParams);
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
     * Displays a form to create a new Lotes entity.
     *
     */
    public function newAction(Request $request) {

        $lote = new Lotes();
        $form = $this->createForm('AppBundle\Form\LotesType', $lote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lote);
            $em->flush();

            $editLink = $this->generateUrl('lotes_edit', array('id' => $lote->getId()));
            $this->get('session')->getFlashBag()->add('success', "<a href='$editLink'>New lote was created successfully.</a>");

            $nextAction = $request->get('submit') == 'save' ? 'lotes' : 'lotes_new';
            return $this->redirectToRoute($nextAction);
        }
        return $this->render('AppBundle:lotes:new.html.twig', array(
                    'lote' => $lote,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Lotes entity.
     *
     */
    public function showAction(Lotes $lote) {
        $deleteForm = $this->createDeleteForm($lote);
        return $this->render('AppBundle:lotes:show.html.twig', array(
                    'lote' => $lote,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Lotes entity.
     *
     */
    public function editAction(Request $request, Lotes $lote) {
        $deleteForm = $this->createDeleteForm($lote);
        $editForm = $this->createForm('AppBundle\Form\LotesType', $lote);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lote);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Edited Successfully!');
            return $this->redirectToRoute('lotes_edit', array('id' => $lote->getId()));
        }
        return $this->render('AppBundle:lotes:edit.html.twig', array(
                    'lote' => $lote,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Lotes entity.
     *
     */
    public function deleteAction(Request $request, Lotes $lote) {

        $form = $this->createDeleteForm($lote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lote);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'The Lotes was deleted successfully');
        } else {
            $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the Lotes');
        }

        return $this->redirectToRoute('lotes');
    }

    /**
     * Creates a form to delete a Lotes entity.
     *
     * @param Lotes $lote The Lotes entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Lotes $lote) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('lotes_delete', array('id' => $lote->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

    /**
     * Delete Lotes by id
     *
     */
    public function deleteByIdAction(Lotes $lote) {
        $em = $this->getDoctrine()->getManager();

        try {
            $em->remove($lote);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'The Lotes was deleted successfully');
        } catch (Exception $ex) {
            $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the Lotes');
        }

        return $this->redirect($this->generateUrl('lotes'));
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
                $repository = $em->getRepository('BackendBundle:Lotes');

                foreach ($ids as $id) {
                    $lote = $repository->find($id);
                    $em->remove($lote);
                    $em->flush();
                }

                $this->get('session')->getFlashBag()->add('success', 'lotes was deleted successfully!');
            } catch (Exception $ex) {
                $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the lotes ');
            }
        }

        return $this->redirect($this->generateUrl('lotes'));
    }

    /*     * *******CARGAR LOTES********** */

    function cargaAction(request $request) {
        $em= $this->getDoctrine()->getManager();
        $archivo=new Archivos();

$form = $this->createForm('AppBundle\Form\ArchivosType', $archivo);
        $form->handleRequest($request);

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
        
        $this->indexAction($request);
        }
        return $this->render('AppBundle:lotes:carga.html.twig', array(
            'form'  =>$form->createView(),
        ));
    }

}
