<?php

namespace ArchivosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArchivosBundle:Default:index.html.twig');
    }
}
