<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Services;
use BackendBundle\Entity\Registro;
/**
 * Description of NotificationServices
 *
 * @author zinho
 */
class NotificationService {
    public  $manager;

    public function __construct($manager){
        $this->manager=$manager;
                
    }
    
    public function set($codProy,$stado,$user) {
        $em= $this->manager;
        $notification=new Registro();
        $notification->setIdusuario($user);
        $notification->setAcciones(0);
        $notification->setReaded(0);
        $notification->setEstado($stado);
        $notification->setCodigoproyecto($codProy);
        $notification->setFecha(new \DateTime("now"));
        $em->persist($notification);
        $flush=$em->flush();
        if($flush==null){
            $status=true;
        }else{
            $status=false;
        }
        return $status;
        
        
    }
}
