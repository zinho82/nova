<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use BackendBundle\Entity\Contacto;
use AppBundle\Form\RegisterType;
use AppBundle\Form\UserType; 
class PortadaController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function portadaAction(Request $request) {
       $client   = $this->get('guzzle.client.api_crm');
$response = $client->get('/twitter');
        return $this->render('AppBundle:Portada:portada.html.twig',array(
            'tuit'=> $response
        ));
    }

    public function qsAction(Request $request) {

        return $this->render('AppBundle:Portada:qs.html.twig');
    }

    public function contactoAction(Request $request) {
        $usuario = new Contacto();
        $form = $this->createForm('AppBundle\Form\ContactoType', $usuario);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $flush = $em->flush();
            if ($flush == null) {
                $this->get('session')->getFlashBag()->add('success', "Mensaje enviado");
            } else {
                $this->get('session')->getFlashBag()->add('danger', "No se Pudo enviar el mensaje");
            }
        }

        return $this->render('AppBundle:Portada:contacto.html.twig',array(
            'form'  =>  $form->createView()
        ));
    }

}
