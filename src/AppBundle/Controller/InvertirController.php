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

class InvertirController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }
    public function invertirAction(Request $request,$id=null) {
        return $this->render('AppBundle:Invertir:index.html.twig', array(
        ));
        
    }

}
