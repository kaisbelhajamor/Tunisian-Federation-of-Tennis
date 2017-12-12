<?php

namespace Ftt\FrontOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Matchs controller.
 *
 */
class MatchsController extends Controller
{

     public function matchinternAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FttBackofficeBundle:Matchs')->findBy(array('typeMatch'=>'International'), array('id' =>'asc'));

        return $this->render('FttFrontOfficeBundle:Matchs:match_intern.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function reservAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FttBackofficeBundle:Ticket')->findAll();

        return $this->render('FttFrontOfficeBundle:Ticket:res_tick.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function findMatchsAction($id) {

        $em = $this->getDoctrine()->getManager();
        $matchs = $em->getRepository('FttBackofficeBundle:Matchs')->find($id);


        return $this->render('FttFrontOfficeBundle:Matchs:ParierMatch.html.twig', array('matchs'=> $matchs));
    }



    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttFrontOfficeBundle:Matchs')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Matchs entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FttFrontOfficeBundle:Matchs:aff_par.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    public function matchlistAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FttBackofficeBundle:Matchs')->findAll();

        return $this->render('FttFrontOfficeBundle:Matchs:ListeMatchs.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function terrainlistAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FttBackofficeBundle:Terrain')->findAll();

        return $this->render('FttFrontOfficeBundle:Matchs:ListeTerrains.html.twig', array(
            'entities' => $entities,
        ));
    }
      
       
}
