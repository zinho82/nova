<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use BackendBundle\Entity\Ctacte;
use BackendBundle\Entity\Proyectos;
use BackendBundle\Entity\Movimientos;

class InvertirController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }
    public function invertirAction(Request $request,$id=null) {
        $em= $this->getDoctrine()->getManager();
        $compra=new Movimientos();
        $form = $this->createForm('AppBundle\Form\MovimientosType', $compra);
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
        }

        $ctacte_repo=$em->getRepository("BackendBundle:Ctacte");
        $movimientos_Repo="";
        
        $proyecto_repo=$em->getRepository("BackendBundle:Proyectos")->findOneBy(array('id' => $id));
        return $this->render('AppBundle:Invertir:index.html.twig', array(
            'proyecto'      =>  $proyecto_repo, 
            'movimiento'    =>  $form->createView()
        ));
        
    }

}
