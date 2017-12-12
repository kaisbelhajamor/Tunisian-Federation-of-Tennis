<?php

namespace Ftt\FrontOfficeBundle\Controller;

use Ftt\FrontOfficeBundle\Entity\Contact;
use Ftt\FrontOfficeBundle\Form\ContactForm;
use Ftt\NewsletterBundle\Entity\Newsletter;
use Ftt\NewsletterBundle\Form\NewsletterForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class SiteController extends Controller
{
    public function indexAction()
    {


        //add newsletter to database
        $newsletter= new Newsletter();
        $request =$this->get('request');
        $form = $this->createForm(new NewsletterForm(),$newsletter);
        $form->handleRequest($request);
        $em1 = $this->getDoctrine()->getManager();

        $query =$em1->createQuery("select m from FttBackofficeBundle:Matchs m order by m.date desc")->setMaxResults(1);
        $match= $query->getResult();


        $query2 =$em1->createQuery("select n from FttGestionActualiteBundle:Actualite n order by n.date desc")->setMaxResults(4);
        $news= $query2->getResult();

        $em= $this->getDoctrine()->getManager();
        if($form->isValid()) {
            $session = $request->getSession();
            $session->start();
            $newsletter->setDate(new \DateTime());

            $em->persist($newsletter);
            $em->flush();
            unset($contact);
            unset($form);
            $session->getFlashBag()->add('Newslettersuccess', 'Inscription au newsletter avec succes!');
            $newsletter = new Newsletter();
            $form = $this->createForm(new NewsletterForm(), $newsletter);



            return $this->redirect($this->generateUrl('frontoffice_homepage'));






        }


        return ($this->render('FttFrontOfficeBundle:Front:accueil.html.twig',array('form_newsletter' => $form->createView(),'match'=>$match,'news'=>$news)));
    }

    public function ContactAction(Request $request){
        $contact= new Contact();
        $request =$this->get('request');
        $form = $this->createForm(new ContactForm(),$contact);
        $form->handleRequest($request);
        $em= $this->getDoctrine()->getManager();
        if($form->isValid()) {

            $contact->setDate(new \DateTime());
            $contact->setReaded(false);
            $contact->setReply(false);
            $em->persist($contact);
            $em->flush();
            unset($contact);
            unset($form);
            $session = $request->getSession();
            $session->start();
            $session->getFlashBag()->add('Contactsuccess', 'Message Envoyé');
            $contact = new Contact();
            $form = $this->createForm(new ContactForm(), $contact);

        }

        return ($this->render('FttFrontOfficeBundle:Front:contact.html.twig',array('form' => $form->createView())));

    }
}
