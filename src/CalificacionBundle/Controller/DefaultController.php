<?php

namespace CalificacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CalificacionBundle:Default:index.html.twig');
    }
}
