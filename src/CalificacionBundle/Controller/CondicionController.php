<?php

namespace CalificacionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\View\TwitterBootstrap3View;
use BackendBundle\Entity\Condicion;

/**
 * Condicion controller.
 *
 */
class CondicionController extends Controller {

    /**
     * Lists all Condicion entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('BackendBundle:Condicion')->createQueryBuilder('e');

        list($filterForm, $queryBuilder) = $this->filter($queryBuilder, $request);
        list($condicions, $pagerHtml) = $this->paginator($queryBuilder, $request);

        $totalOfRecordsString = $this->getTotalOfRecordsString($queryBuilder, $request);

        return $this->render('CalificacionBundle:condicion:index.html.twig', array(
                    'condicions' => $condicions,
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
        $filterForm = $this->createForm('CalificacionBundle\Form\CondicionFilterType');

        // Reset filter
        if ($request->get('filter_action') == 'reset') {
            $session->remove('CondicionControllerFilter');
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
                $session->set('CondicionControllerFilter', $filterData);
            }
        } else {
            // Get filter from session
            if ($session->has('CondicionControllerFilter')) {
                $filterData = $session->get('CondicionControllerFilter');

                foreach ($filterData as $key => $filter) { //fix for entityFilterType that is loaded from session
                    if (is_object($filter)) {
                        $filterData[$key] = $queryBuilder->getEntityManager()->merge($filter);
                    }
                }

                $filterForm = $this->createForm('CalificacionBundle\Form\CondicionFilterType', $filterData);
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
            return $me->generateUrl('condicion', $requestParams);
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
     * Displays a form to create a new Condicion entity.
     *
     */
    public function newAction(Request $request, $id, $fruta) {
        $em = $this->getDoctrine()->getManager();
        $condicion = new Condicion();
        var_dump($request);
        $form = $this->createForm('CalificacionBundle\Form\CondicionType', $condicion);
        $form->handleRequest($request);
$lotes=$em->getRepository("BackendBundle:Lotes")->find($id);
        if ($form->isSubmitted() && $form->isValid()) {

            $condicion->setLotes($lotes);
            $condicion->setPalletNumber($lotes);
            $condicion->setEjecutivo($this->getUser());
            $em->persist($condicion);
            $em->flush();

            $editLink = $this->generateUrl('condicion_edit', array('id' => $condicion->getId()));
            $this->get('session')->getFlashBag()->add('success', "<a href='$editLink'>New condicion was created successfully.</a>");

            $nextAction = $request->get('submit') == 'save' ? 'condicion' : 'condicion_new';
            return $this->redirectToRoute($nextAction);
        }
        return $this->render('CalificacionBundle:condicion:new.html.twig', array(
                    'condicion' => $condicion,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Condicion entity.
     *
     */
    public function showAction(Condicion $condicion) {
        $deleteForm = $this->createDeleteForm($condicion);
        return $this->render('CalificacionBundle:condicion:show.html.twig', array(
                    'condicion' => $condicion,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Condicion entity.
     *
     */
    public function editAction(Request $request, Condicion $condicion) {
        $deleteForm = $this->createDeleteForm($condicion);
        $editForm = $this->createForm('CalificacionBundle\Form\CondicionType', $condicion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($condicion);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Edited Successfully!');
            return $this->redirectToRoute('condicion_edit', array('id' => $condicion->getId()));
        }
        return $this->render('CalificacionBundle:condicion:edit.html.twig', array(
                    'condicion' => $condicion,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Condicion entity.
     *
     */
    public function deleteAction(Request $request, Condicion $condicion) {

        $form = $this->createDeleteForm($condicion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($condicion);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'The Condicion was deleted successfully');
        } else {
            $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the Condicion');
        }

        return $this->redirectToRoute('condicion');
    }

    /**
     * Creates a form to delete a Condicion entity.
     *
     * @param Condicion $condicion The Condicion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Condicion $condicion) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('condicion_delete', array('id' => $condicion->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

    /**
     * Delete Condicion by id
     *
     */
    public function deleteByIdAction(Condicion $condicion) {
        $em = $this->getDoctrine()->getManager();

        try {
            $em->remove($condicion);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'The Condicion was deleted successfully');
        } catch (Exception $ex) {
            $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the Condicion');
        }

        return $this->redirect($this->generateUrl('condicion'));
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
                $repository = $em->getRepository('BackendBundle:Condicion');

                foreach ($ids as $id) {
                    $condicion = $repository->find($id);
                    $em->remove($condicion);
                    $em->flush();
                }

                $this->get('session')->getFlashBag()->add('success', 'condicions was deleted successfully!');
            } catch (Exception $ex) {
                $this->get('session')->getFlashBag()->add('error', 'Problem with deletion of the condicions ');
            }
        }

        return $this->redirect($this->generateUrl('condicion'));
    }

}
