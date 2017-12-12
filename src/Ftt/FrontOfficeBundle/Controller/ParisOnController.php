<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Ftt\FrontOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ftt\BackofficeBundle\Entity\Paris;
/**
 * Description of ParisOnController
 *
 * @author SAAD
 */
class ParisOnController extends Controller{
    
   public function ReservTickAction($m,$d,$id,$pd) {

        $ParisOn = new Paris();
       $user =$this->get('security.context')->getToken()->getUser();
       $ParisOn->setLogin($user->getUsername());//Login du membre
        $ParisOn->setDate($d);

        $ParisOn->setMatchs($m);
        $em = $this->getDoctrine()->getManager();
        $em->persist($ParisOn);
        $em->flush();
       
        return $this->redirectToRoute('decrem',array("id"=>$id,"pd"=>$pd));
    }
}
