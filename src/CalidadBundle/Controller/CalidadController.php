<?php

namespace CalidadBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\View\TwitterBootstrap3View;

use BackendBundle\Entity\Calidad;

/**
 * Calidad controller.
 *
 */
class CalidadController extends Controller
{
    /**
     * Lists all Calidad entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('BackendBundle:Calidad')->createQueryBuilder('e');

        list($filterForm, $queryBuilder) = $this->filter($queryBuilder, $request);
        list($calidads, $pagerHtml) = $this->paginator($queryBuilder, $request);
        
        $totalOfRecordsString = $this->getTotalOfRecordsString($queryBuilder, $request);

        return $this->render('CalidadBundle:calidad:index.html.twig', array(
            'calidads' => $calidads,
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
        $filterForm = $this->createForm('CalidadBundle\Form\CalidadFilterType');

        // Reset filter
        if ($request->get('filter_action') == 'reset') {
            $session->remove('CalidadControllerFilter');
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
                $session->set('CalidadControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('CalidadControllerFilter')) {
                $filterData = $session->get('CalidadControllerFilter');
                
                foreach ($filterData as $key => $filter) { //fix for entityFilterType that is loaded from session
                    if (is_object($filter)) {
                        $filterData[$key] = $queryBuilder->getEntityManager()->merge($filter);
                    }
                }
                
                $filterForm = $this->createForm('CalidadBundle\Form\CalidadFilterType', $filterData);
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
            return $me->generateUrl('calidad', $requestParams);
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
     * Displays a form to create a new Calidad entity.
     *
     */
    public function newAction(Request $request)
    {
    
        $calidad = new Calidad();
        $form   = $this->createForm('CalidadBundle\Form\CalidadType', $calidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($calidad);
            $em->flush();
            
            $editLink = $this->generateUrl('calidad_edit', array('id' => $calidad->getId()));
            $this->get('session')->getFlashBag()->add('success', "<a href='$editLink'>New calidad was created successfully.</a>" );
            
            $nextAction=  $request->get('submit') == 'save' ? 'calidad' : 'calidad_new';
            return $this->redirectToRoute($nextAction);
        }
        return $this->render('CalidadBundle:calidad:new.html.twig', array(
            'calidad' => $calidad,
            'form'   => $form->createView(),
        ));
    }
    

    /**
     * Finds and displays a Calidad entity.
     *
     */
    public function showAction(Calidad $calidad)
    {
        $deleteForm = $this->createDeleteForm($calidad);
        return $this->render('CalidadBundle:calidad:show.html.twig', array(
            'calidad' => $calidad,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    

    /**
     * Displays a form to edit an existing Calidad entity.
     *
     */
    public function editAction(Request $request, Calidad $calidad)
    {
        $deleteForm = $this->createDeleteForm($calidad);
        $editForm = $this->createForm('CalidadBundle\Form\CalidadType', $calidad);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($calidad);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('success', 'Edited Successfully!');
            return $this->redirectToRoute('calidad_edit', array('id' => $calidad->getId()));
        }
        return $this->render('CalidadBundle:calidad:edit.html.twig', array(
            'calidad' => $calidad,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    

    /**
     * Deletes a Calidad entity.
     *
     */
    public function deleteAction(Request $request, Calidad $calidad)
    {
    
        $form = $this->createDeleteForm($calidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($calidad);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'The Calidad was deleted successfully');
        } else {
            $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the Calidad');
        }
        
        return $this->redirectToRoute('calidad');
    }
    
    /**
     * Creates a form to delete a Calidad entity.
     *
     * @param Calidad $calidad The Calidad entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Calidad $calidad)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('calidad_delete', array('id' => $calidad->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    /**
     * Delete Calidad by id
     *
     */
    public function deleteByIdAction(Calidad $calidad){
        $em = $this->getDoctrine()->getManager();
        
        try {
            $em->remove($calidad);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'The Calidad was deleted successfully');
        } catch (Exception $ex) {
            $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the Calidad');
        }

        return $this->redirect($this->generateUrl('calidad'));

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
                $repository = $em->getRepository('BackendBundle:Calidad');

                foreach ($ids as $id) {
                    $calidad = $repository->find($id);
                    $em->remove($calidad);
                    $em->flush();
                }

                $this->get('session')->getFlashBag()->add('success', 'calidads was deleted successfully!');

            } catch (Exception $ex) {
                $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the calidads ');
            }
        }

        return $this->redirect($this->generateUrl('calidad'));
    }
    

}
