<?php

namespace InformesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
    public function verAction(Request $request,$id=null)
    {
        $em=  $this->getDoctrine()->getManager();
         $lotes = "select * from lotes l "
                . "inner join calidad c on c.lotes_id=l.id and  c.id=$id  "
                . "inner join usuario usr on usr.id=c.ejecutivo "
                . "inner join condicion co on co.lotes_id=l.id "
                . " group by l.container,l.number_Pallets"; 
        $stmt = $em->getConnection()->prepare($lotes);
        $stmt->execute();
        $res=$stmt->fetchAll();
        return $this->render('InformesBundle:informes:informe.html.twig',array(
            'lotes'   =>  $res,
        ));
    }
}
