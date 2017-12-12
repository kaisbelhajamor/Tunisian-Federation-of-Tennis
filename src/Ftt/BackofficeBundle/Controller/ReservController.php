<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ftt\BackofficeBundle\Controller;

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
        $Reserv_ticket = $em->getRepository('FttBackofficeBundle:Reserv_ticket')->findAll();
        return $this->render('FttBackofficeBundle:Reserv_ticket:listV.html.twig', array('voitures' => $Reserv_ticket));
    }

    public function ReservTickAction($j1,$j2,$d) {

        // return new Response('gfdmlkgfdmml');

        $res_ticket = new ResTicket();
       $m=$j1." vs ".$j2;
        $res_ticket->setLogin('hassine_saad');
        $res_ticket->setDate($d);
 //       $ticket = $this->getDoctrine()->getManager()->getRepository('FttBackofficeBundle:Ticket')->findOneById(71);
//        $res_ticket->setTicket($ticket);
        $res_ticket->setMatchs($m);
        $em = $this->getDoctrine()->getManager();
        $em->persist($res_ticket);
        $em->flush();
        return $this->redirectToRoute('reser_tick');
    }

}
