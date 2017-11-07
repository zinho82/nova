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
        $query=$em->createQuery(
                "select  c.movimiento ,sum(c.monto) as monto,IDENTITY(c.estado)  as estado from BackendBundle:Ctacte c
 group by c.movimiento,c.estado")->getResult();
$inversiones=$em->getRepository("BackendBundle:Movimientos")
        ->findOneBy(array(''));
        return $this->render('AppBundle:Ctacte:index.html.twig',array(
            'cuenta' => $query
        ));
    }
    public function DepositoAction(Request $request) {
        $em= $this->getDoctrine()->getManager();
        $ctacte=$em->getRepository("BackendBundle:Ctacte")->findBy(array('usuariousuario' => $this->getUser()));
        $depo=new Ctacte();
        $etado=$em->getRepository("BackendBundle:config")->find(21);
        $form= $this->createForm('AppBundle\Form\CtacteDepositoType',$depo);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $depo->setUsuariousuario($this->getUser());
            $depo->setFechaingreso(new \DateTime('now'));
            $depo->setMovimiento('Deposito');
            $depo->setEstado($etado);
            $em->persist($depo);
            $flush = $em->flush();
            if ($flush == null) {
                $this->get('session')->getFlashBag()->add('success', "Aviso de Deposito Creado ");
            } else {
                $this->get('session')->getFlashBag()->add('danger', "Aviso de Deposito NO Creado");
            }




            $nextAction = $request->get('submit') == 'save' ? 'ctacte' : 'ctacte_deposito';
            return $this->redirectToRoute($nextAction); 
        }
         return $this->render('AppBundle:Ctacte:depositos.html.twig',array(
            'cuenta' => $ctacte,
             'form' =>  $form->createView()
        ));
        
    }

}
