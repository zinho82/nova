<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use BackendBundle\Entity\Usuario;
use AppBundle\Form\RegisterType;
use AppBundle\Form\UserType;

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

}
