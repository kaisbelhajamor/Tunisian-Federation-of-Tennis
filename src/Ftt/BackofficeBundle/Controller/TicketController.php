<?php

namespace Ftt\BackofficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ftt\BackofficeBundle\Entity\Ticket;
use Ftt\BackofficeBundle\Form\TicketType;
use Ob\HighchartsBundle\Highcharts\Highchart;
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
    
    
    public function deleteTickAction($id) {

        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository('FttBackofficeBundle:Ticket')->find($id);
        $em->remove($ticket);
        $em->flush();
       return $this->redirectToRoute('ticket_affich');
    }
    public function TickAction()
    {
       // $ticket=new Ticket();
        $em = $this->getDoctrine()->getManager();
$query = $em->createQuery("SELECT u, a FROM Ticket u JOIN u.idMAtch ");
$ticket = $query->getResult();
        //$entities = $em->getRepository('FttBackofficeBundle:Ticket')->findAll();

        return $this->render('FttBackofficeBundle:Ticket:res_ticket.html.twig', array(
            'entities' => $ticket,
        ));
    }
    /**
     * Creates a new Ticket entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Ticket();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $m=$entity->getNbtickets();
            $entity->setNbplacdisp($m);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ticket_show', array('id' => $entity->getId())));
        }

        return $this->render('FttBackofficeBundle:Ticket:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
     public function statistiqueAction()
    {
        $em = $this->getDoctrine()->getManager();
            $query1 = $em->createQuery('SELECT count (m.nbtickets) 
                                               FROM FttBackofficeBundle:Ticket m
                                              ');
                  $pbeq1 = $query1->getResult();
                   $nb1 = intval($pbeq1[0][1]);
                   
       
            $query2 = $em->createQuery('SELECT count (m.id) 
                                               FROM FttBackofficeBundle:Paris m
                                              ');
                  $pbeq2 = $query2->getResult();
                   $nb2 = intval($pbeq2[0][1]);    
                   
             $query3 = $em->createQuery('SELECT count (m.id) 
                                               FROM FttBackofficeBundle:Joueur m
                                              ');
                  $pbeq3 = $query3->getResult();
                   $nb3 = intval($pbeq3[0][1]);    
                   
             $query4 = $em->createQuery('SELECT count (m.id) 
                                               FROM FttBackofficeBundle:Matchs m
                                              ');
                  $pbeq4 = $query4->getResult();
                   $nb4 = intval($pbeq4[0][1]);  
                   
                      $sellsHistory = array(
                array(
                    "name" => "nombre",
                    "data" => array($nb1, $nb2, $nb3,$nb4)
                ),
               
            );
           
            $dates = array("Tickets","Paris","Joueurs","Matchs" );

            $ob = new Highchart();

            $ob->chart->renderTo('barchart');
            $ob->title->text('');
            $ob->chart->type('column');
            $ob->yAxis->title(array('text' => "Nombre"));
            $ob->xAxis->title(array('text' => ""));
            $ob->xAxis->categories($dates);
            $ob->series($sellsHistory);

            
            return $this->render('FttBackofficeBundle:Ticket:statistique.html.twig', array(
             'barchart' => $ob,'pb1'=>$nb1,'pb2'=>$nb2,'pb3'=>$nb3,'pb4'=>$nb4));
        }

    /**
     * Creates a form to create a Ticket entity.
     *
     * @param Ticket $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Ticket $entity)
    {
        $form = $this->createForm(new TicketType(), $entity, array(
            'action' => $this->generateUrl('ticket_create'),
            'method' => 'POST',
        ));
           $form->add('matchs', 'choice', array('choices' => array('Nadal vs Federer'=>'Nadal vs Federer','Djokovic vs Murray'=>'Djokovic vs Murray','Soderling vs Tsonga'=>'Soderling vs Tsonga'),'label' => 'Matchs : '));
        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new Ticket entity.
     *
     */
    public function newAction()
    {
        $entity = new Ticket();
        $form   = $this->createCreateForm($entity);

        return $this->render('FttBackofficeBundle:Ticket:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ticket entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttBackofficeBundle:Ticket')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ticket entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FttBackofficeBundle:Ticket:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ticket entity.
     *
     */
    /**
     * Deletes a Ticket entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FttBackofficeBundle:Ticket')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ticket entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ticket'));
    }

    /**
     * Creates a form to delete a Ticket entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ticket_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
