<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\View\TwitterBootstrap3View;

use BackendBundle\Entity\General;

/**
 * General controller.
 *
 */
class GeneralController extends Controller
{
    /**
     * Lists all General entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('BackendBundle:General')->createQueryBuilder('e');

        list($filterForm, $queryBuilder) = $this->filter($queryBuilder, $request);
        list($generals, $pagerHtml) = $this->paginator($queryBuilder, $request);
        
        $totalOfRecordsString = $this->getTotalOfRecordsString($queryBuilder, $request);

        return $this->render('AppBundle:general:index.html.twig', array(
            'generals' => $generals,
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
        $filterForm = $this->createForm('AppBundle\Form\GeneralFilterType');

        // Reset filter
        if ($request->get('filter_action') == 'reset') {
            $session->remove('GeneralControllerFilter');
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
                $session->set('GeneralControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('GeneralControllerFilter')) {
                $filterData = $session->get('GeneralControllerFilter');
                
                foreach ($filterData as $key => $filter) { //fix for entityFilterType that is loaded from session
                    if (is_object($filter)) {
                        $filterData[$key] = $queryBuilder->getEntityManager()->merge($filter);
                    }
                }
                
                $filterForm = $this->createForm('AppBundle\Form\GeneralFilterType', $filterData);
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
            return $me->generateUrl('general', $requestParams);
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
     * Displays a form to create a new General entity.
     *
     */
    public function newAction(Request $request)
    {
    
        $general = new General();
        $form   = $this->createForm('AppBundle\Form\GeneralType', $general);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($general);
            $em->flush();
            
            $editLink = $this->generateUrl('general_edit', array('id' => $general->getId()));
            $this->get('session')->getFlashBag()->add('success', "<a href='$editLink'>New general was created successfully.</a>" );
            
            $nextAction=  $request->get('submit') == 'save' ? 'general' : 'general_new';
            return $this->redirectToRoute($nextAction);
        }
        return $this->render('AppBundle:general:new.html.twig', array(
            'general' => $general,
            'form'   => $form->createView(),
        ));
    }
    

    /**
     * Finds and displays a General entity.
     *
     */
    public function showAction(General $general)
    {
        $deleteForm = $this->createDeleteForm($general);
        return $this->render('AppBundle:general:show.html.twig', array(
            'general' => $general,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    

    /**
     * Displays a form to edit an existing General entity.
     *
     */
    public function editAction(Request $request, General $general)
    {
        $deleteForm = $this->createDeleteForm($general);
        $editForm = $this->createForm('AppBundle\Form\GeneralType', $general);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($general);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('success', 'Edited Successfully!');
            return $this->redirectToRoute('general_edit', array('id' => $general->getId()));
        }
        return $this->render('AppBundle:general:edit.html.twig', array(
            'general' => $general,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    

    /**
     * Deletes a General entity.
     *
     */
    public function deleteAction(Request $request, General $general)
    {
    
        $form = $this->createDeleteForm($general);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($general);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'The General was deleted successfully');
        } else {
            $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the General');
        }
        
        return $this->redirectToRoute('general');
    }
    
    /**
     * Creates a form to delete a General entity.
     *
     * @param General $general The General entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(General $general)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('general_delete', array('id' => $general->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    /**
     * Delete General by id
     *
     */
    public function deleteByIdAction(General $general){
        $em = $this->getDoctrine()->getManager();
        
        try {
            $em->remove($general);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'The General was deleted successfully');
        } catch (Exception $ex) {
            $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the General');
        }

        return $this->redirect($this->generateUrl('general'));

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
                $repository = $em->getRepository('BackendBundle:General');

                foreach ($ids as $id) {
                    $general = $repository->find($id);
                    $em->remove($general);
                    $em->flush();
                }

                $this->get('session')->getFlashBag()->add('success', 'generals was deleted successfully!');

            } catch (Exception $ex) {
                $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the generals ');
            }
        }

        return $this->redirect($this->generateUrl('general'));
    }
    

}
