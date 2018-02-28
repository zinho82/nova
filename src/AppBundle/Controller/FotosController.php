<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\View\TwitterBootstrap3View;

use BackendBundle\Entity\Fotos;

/**
 * Fotos controller.
 *
 */
class FotosController extends Controller
{
    /**
     * Lists all Fotos entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('BackendBundle:Fotos')->createQueryBuilder('e');

        list($filterForm, $queryBuilder) = $this->filter($queryBuilder, $request);
        list($fotos, $pagerHtml) = $this->paginator($queryBuilder, $request);
        
        $totalOfRecordsString = $this->getTotalOfRecordsString($queryBuilder, $request);

        return $this->render('AppBundle:fotos:index.html.twig', array(
            'fotos' => $fotos,
            'pagerHtml' => $pagerHtml,
            'filterForm' => $filterForm->createView(),
            'totalOfRecordsString' => $totalOfRecordsString,

        ));
    }

    /**
    * Create filter form and process filter request.
    *
    */
    protected function filter($queryBuilder, Request $request)
    {
        $session = $request->getSession();
        $filterForm = $this->createForm('AppBundle\Form\FotosFilterType');

        // Reset filter
        if ($request->get('filter_action') == 'reset') {
            $session->remove('FotosControllerFilter');
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
                $session->set('FotosControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('FotosControllerFilter')) {
                $filterData = $session->get('FotosControllerFilter');
                
                foreach ($filterData as $key => $filter) { //fix for entityFilterType that is loaded from session
                    if (is_object($filter)) {
                        $filterData[$key] = $queryBuilder->getEntityManager()->merge($filter);
                    }
                }
                
                $filterForm = $this->createForm('AppBundle\Form\FotosFilterType', $filterData);
                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($filterForm, $queryBuilder);
            }
        }

        return array($filterForm, $queryBuilder);
    }


    /**
    * Get results from paginator and get paginator view.
    *
    */
    protected function paginator($queryBuilder, Request $request)
    {
        //sorting
        $sortCol = $queryBuilder->getRootAlias().'.'.$request->get('pcg_sort_col', 'id');
        $queryBuilder->orderBy($sortCol, $request->get('pcg_sort_order', 'desc'));
        // Paginator
        $adapter = new DoctrineORMAdapter($queryBuilder);
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage($request->get('pcg_show' , 10));

        try {
            $pagerfanta->setCurrentPage($request->get('pcg_page', 1));
        } catch (\Pagerfanta\Exception\OutOfRangeCurrentPageException $ex) {
            $pagerfanta->setCurrentPage(1);
        }
        
        $entities = $pagerfanta->getCurrentPageResults();

        // Paginator - route generator
        $me = $this;
        $routeGenerator = function($page) use ($me, $request)
        {
            $requestParams = $request->query->all();
            $requestParams['pcg_page'] = $page;
            return $me->generateUrl('fotos', $requestParams);
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
     * Displays a form to create a new Fotos entity.
     *
     */
    public function newAction(Request $request)
    {
    
        $foto = new Fotos();
        $form   = $this->createForm('AppBundle\Form\FotosType', $foto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($foto);
            $em->flush();
            
            $editLink = $this->generateUrl('fotos_edit', array('id' => $foto->getId()));
            $this->get('session')->getFlashBag()->add('success', "<a href='$editLink'>New foto was created successfully.</a>" );
            
            $nextAction=  $request->get('submit') == 'save' ? 'fotos' : 'fotos_new';
            return $this->redirectToRoute($nextAction);
        }
        return $this->render('AppBundle:fotos:new.html.twig', array(
            'foto' => $foto,
            'form'   => $form->createView(),
        ));
    }
    

    /**
     * Finds and displays a Fotos entity.
     *
     */
    public function showAction(Fotos $foto)
    {
        $deleteForm = $this->createDeleteForm($foto);
        return $this->render('AppBundle:fotos:show.html.twig', array(
            'foto' => $foto,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    

    /**
     * Displays a form to edit an existing Fotos entity.
     *
     */
    public function editAction(Request $request, Fotos $foto)
    {
        $deleteForm = $this->createDeleteForm($foto);
        $editForm = $this->createForm('AppBundle\Form\FotosType', $foto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($foto);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('success', 'Edited Successfully!');
            return $this->redirectToRoute('fotos_edit', array('id' => $foto->getId()));
        }
        return $this->render('AppBundle:fotos:edit.html.twig', array(
            'foto' => $foto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    

    /**
     * Deletes a Fotos entity.
     *
     */
    public function deleteAction(Request $request, Fotos $foto)
    {
    
        $form = $this->createDeleteForm($foto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($foto);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'The Fotos was deleted successfully');
        } else {
            $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the Fotos');
        }
        
        return $this->redirectToRoute('fotos');
    }
    
    /**
     * Creates a form to delete a Fotos entity.
     *
     * @param Fotos $foto The Fotos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Fotos $foto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fotos_delete', array('id' => $foto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    /**
     * Delete Fotos by id
     *
     */
    public function deleteByIdAction(Fotos $foto){
        $em = $this->getDoctrine()->getManager();
        
        try {
            $em->remove($foto);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'The Fotos was deleted successfully');
        } catch (Exception $ex) {
            $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the Fotos');
        }

        return $this->redirect($this->generateUrl('fotos'));

    }
    

    /**
    * Bulk Action
    */
    public function bulkAction(Request $request)
    {
        $ids = $request->get("ids", array());
        $action = $request->get("bulk_action", "delete");

        if ($action == "delete") {
            try {
                $em = $this->getDoctrine()->getManager();
                $repository = $em->getRepository('BackendBundle:Fotos');

                foreach ($ids as $id) {
                    $foto = $repository->find($id);
                    $em->remove($foto);
                    $em->flush();
                }

                $this->get('session')->getFlashBag()->add('success', 'fotos was deleted successfully!');

            } catch (Exception $ex) {
                $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the fotos ');
            }
        }

        return $this->redirect($this->generateUrl('fotos'));
    }
    

}
