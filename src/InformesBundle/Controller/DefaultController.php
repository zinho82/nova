<?php

namespace InformesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InformesBundle:Default:index.html.twig');
    }
}
