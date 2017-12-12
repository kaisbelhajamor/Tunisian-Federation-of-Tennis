<?php

namespace Ftt\FrontOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ftt\BackofficeBundle\Entity\Ticket;
/**
 * Ticket controller.
 *
 */
class TicketController extends Controller
{

    /**
     * Lists all Ticket entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FttBackofficeBundle:Ticket')->findAll();

        return $this->render('FttBackofficeBundle:Ticket:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    
    
//    public function TickAction()
//    {
//       // $ticket=new Ticket();
//        $em = $this->getDoctrine()->getManager();
//$query = $em->createQuery("SELECT u, a FROM Ticket u JOIN u.idMAtch ");
//$ticket = $query->getResult();
//        //$entities = $em->getRepository('FttBackofficeBundle:Ticket')->findAll();
//
//        return $this->render('FttBackofficeBundle:Ticket:res_ticket.html.twig', array(
//            'entities' => $ticket,
//        ));
//    }
   
    public function decrementeAction($id,$pd)
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository('FttBackofficeBundle:Ticket')->find($id);
        $px=$pd-1;
        $ticket->setNbplacdisp($px);
        $em->flush();
 return $this->redirectToRoute('reser_tick');
    }
}
