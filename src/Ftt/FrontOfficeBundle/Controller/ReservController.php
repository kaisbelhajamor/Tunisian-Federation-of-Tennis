<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ftt\FrontOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ftt\BackofficeBundle\Entity\ResTicket;

/**
 * Description of Reserv_ticketController
 *
 * @author SAAD
 */
class ReservController extends Controller {

    public function listRAction() {

        //créer une instance de l'entity manager
        $em = $this->getDoctrine()->getManager();
        $Reserv_ticket = $em->getRepository('FttBackofficeBundle:ResTicket')->findAll();
        return $this->render('FttFrontOfficeBundle:Reserv_ticket:listV.html.twig', array('Reservs' => $Reserv_ticket));
    }
    public function showrAction($log)
    {
        $em = $this->getDoctrine()->getManager();
       
        $entities = $em->getRepository('FttBackofficeBundle:ResTicket')->findBy(array('login'=>$log), array('id' =>'asc'));

        return $this->render('FttFrontOfficeBundle:Ticket:showReserv.html.twig', array(
            'entities' => $entities,
        ));
    }

    public function ReservTickAction($m,$d,$id,$pd) {

        $res_ticket = new ResTicket();
        $user =$this->get('security.context')->getToken()->getUser();
        $res_ticket->setLogin($user->getUsername());//Login du membre
        $res_ticket->setDate($d);
        $res_ticket->setMatchs($m);
        $em = $this->getDoctrine()->getManager();
        $em->persist($res_ticket);
        $em->flush();
        return $this->redirectToRoute('decrem',array("id"=>$id,"pd"=>$pd));
    }

}
