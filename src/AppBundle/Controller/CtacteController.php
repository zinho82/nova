<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use BackendBundle\Entity\Usuario;
use BackendBundle\Entity\Ctacte;

class CtacteController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function CuentaCorrienteAction(Request $request) {
        $em= $this->getDoctrine()->getManager();
        $query=$em->createQuery(""
                . "select  c.movimiento ,sum(c.monto) as monto from BackendBundle:Ctacte c
group by c.movimiento")->getResult();

        return $this->render('AppBundle:Ctacte:index.html.twig',array(
            'cuenta' => $query
        ));
    }
    public function DepositoAction(Request $request) {
        $em= $this->getDoctrine()->getManager()->getRepository("BackendBundle:Ctacte")->findBy(array('usuariousuario' => $this->getUser()));
        $depo=new Ctacte();
        $form= $this->createForm('AppBundle\Form\CtacteDepositoType',$depo);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $depo->setUsuariousuario($this->getUser());
            $depo->setFechaingreso(new \DateTime('now'));
            $depo->setMovimiento('Deposito');
            $em->persist($depo);
            $flush = $em->flush();
            if ($flush == null) {
                $this->get('session')->getFlashBag()->add('success', "Aviso de Deposito Creado ");
            } else {
                $this->get('session')->getFlashBag()->add('danger', "Aviso de Deposito NO Creado");
            }




            $nextAction = $request->get('submit') == 'save' ? 'proyectos' : 'proyectos_new';
            return $this->redirectToRoute($nextAction); 
        }
         return $this->render('AppBundle:Ctacte:depositos.html.twig',array(
            'cuenta' => $em,
             'form' =>  $form->createView()
        ));
        
    }

}
