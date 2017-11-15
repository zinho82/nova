<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Controller\ProyectosController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use BackendBundle\Entity\Proyectos;
use BackendBundle\Entity\Usuario;
use AppBundle\Form\RegisterType;
use AppBundle\Form\UserType;
use BackendBundle\Entity\Pagos;

/**
 * Proyecto controller.
 *
 */
class ProyectosController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    /**
     * Lists all proyecto entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $proyectos = $em->getRepository('BackendBundle:Proyectos')->findAll();

        return $this->render('AppBundle:Proyectos/crud:index.html.twig', array(
                    'proyectos' => $proyectos,
        ));
    }

    /**
     * Finds and displays a proyecto entity.
     *
     */
    public function showAction(Proyectos $proyecto) {

        return $this->render('AppBundle:Proyectos/crud:show.html.twig', array(
                    'proyecto' => $proyecto,
        ));
    }
    public function newAction(Request $request) {
        $usuarios=$this->getUser();
        $usuario = new Proyectos();
        $form = $this->createForm('AppBundle\Form\ProyectosType', $usuario);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $flush = $em->flush();
            $editLink = $this->generateUrl('proyectos_edit', array('id' => $usuarios->getIdUsuario()));
            if ($flush == null) {
                $this->get('session')->getFlashBag()->add('success', "<a href='$editLink'>proyecto creado .</a>");
            } else {
                $this->get('session')->getFlashBag()->add('danger', "<a href='$editLink'>Proyecto NO  creado .</a>");
            }




            $nextAction = $request->get('submit') == 'save' ? 'proyectos' : 'proyectos_new';
            return $this->redirectToRoute($nextAction); 
        }
        return $this->render('AppBundle:Proyectos/crud:new.html.twig', array(
                    'usuario' => $usuario,
                    'form' => $form->createView(),
                    'TituloForm'    =>  'Nuevo Proyecto'
        ));
    }
    public function editAction(Request $request, Proyectos $proyectos) {
//        $deleteForm = $this->createDeleteForm($proyectos);
        $form = $this->createForm('AppBundle\Form\ProyectosType', $proyectos);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($proyectos);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Edited Successfully!');
            return $this->redirectToRoute('proyectos_lista', array('id' => $proyectos->getId()));
        }
        return $this->render('AppBundle:Proyectos/crud:new.html.twig', array(
                    'campana' => $proyectos,
                    'form' => $form->createView(),
                    'TituloForm'   =>  'Editar Proyecto '
//                    'delete_form' => $deleteForm->createView(),
        ));
    }
    public function deleteAction(Request $request, Proyectos $proyectos) {
        $this->createDeleteForm($proyectos);
        
        
    }
    public function listaAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $proyectos_repo = $em->getRepository("BackendBundle:Proyectos");
        $query = $proyectos_repo->createQueryBuilder('p')
                ->orderBy('p.id', 'DESC')
                ->getQuery()
        ;
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 5
        );



        return $this->render("AppBundle:Proyectos:proyectos.html.twig", array(
                    'pagination' => $pagination
        ));
    }

    public function fichaAction(Request $request, $id = null) {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $u = $user->getIdusuario();
        $query = $em->getRepository("BackendBundle:Proyectos");
        $ficha = array();
        $ficha = $query->findOneBy(array('id' => $id));
        $notification = $this->get('app.notification_service');
        $notification->set($id, 17, $u);

        return $this->render('AppBundle:Proyectos:ficha.html.twig', array(
                    'ficha' => $ficha,
                    'usuario' => $user
        ));
    }

    private function createDeleteForm(Proyectos $proyctos) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('proyectos_lista', array('id' => null)))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }
    public function getProyectos(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $publication_repo = $em->getRepository("BackendBundle:Proyectos");
        $query = $publication_repo->createQueryBuilder('p')
                ->orderBy('p.id', 'DESC')
                ->getQuery()
        ;

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 5
        );
        return $pagination;
    }
    public function pagosAction(Request $request, Pagos $pagos) {
        $form = $this->createForm('AppBundle\Form\PagosType', $pagos);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($proyectos);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Edited Successfully!');
            return $this->redirectToRoute('proyectos_lista', array('id' => $proyectos->getId()));
        }
        return $this->render('AppBundle:Proyectos/crud:new.html.twig', array(
                    'campana' => $proyectos,
                    'form' => $form->createView(),
                    'TituloForm'   =>  'Editar Proyecto '
//                    'delete_form' => $deleteForm->createView(),
        ));
    }
}
