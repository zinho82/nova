<?php

namespace InformesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackendBundle\Entity\Calidad;
class InformesController extends Controller
{
    public function indexAction()
    {
        $em=  $this->getDoctrine()->getManager();
        $lotes = "select * from lotes l 
inner join calidad c on c.lotes_id=l.id
group by l.container,l.number_Pallets"; 
        $stmt = $em->getConnection()->prepare($lotes);
        $stmt->execute();
        return $this->render('InformesBundle:informes:index.html.twig',array(
            'lotes'   =>  $stmt,
        ));
    }
}
