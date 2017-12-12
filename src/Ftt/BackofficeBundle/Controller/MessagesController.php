<?php

namespace Ftt\BackofficeBundle\Controller;

use Ftt\BackofficeBundle\Form\FormContactReply;
use Ftt\FrontOfficeBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\False;
use Symfony\Component\Validator\Constraints\True;

class MessagesController extends Controller
{
    public function listAction()
    {
        $em= $this->getDoctrine()->getManager();
        $contact = $em->getRepository('FttFrontOfficeBundle:Contact')->findAll();
        return $this->render('@FttBackoffice/Messages/listMessages.html.twig', array('data' => $contact));
    }



    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $contact = $em->getRepository('FttFrontOfficeBundle:Contact')->find($id);
        $em->remove($contact);
        $em->flush();
        $request =$this->get('request');
        $session = $request->getSession();
        $session->start();
        $session->getFlashBag()->add('SuccessDeleteMsg', 'Message supprimé!');
        return $this->redirectToRoute('ftt_backoffice_messages_list');
    }

    public function showAction($id,Request $request){
        $em = $this->getDoctrine()->getManager();
        $contact = $em->getRepository('FttFrontOfficeBundle:Contact')->find($id);
        $contact->setReaded(true);
        $defaultData = array('message' => 'Type your message here');
        $form = $this->createFormBuilder($defaultData)
            -> add('description','textarea',array('required'=>true,'label'=>false,
                'attr' => array('cols' => '1650', 'rows' => '20'),

            ))
            -> add('Envoyer','submit')
            ->getForm();
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            $data = $form->getData();

          $this::ReplyContact($contact->getName(),$contact->getMail(),$contact->getMessage(),$data['description'],$contact->getDate());
          $request =$this->get('request');
          $session = $request->getSession();
          $session->start();
          $session->getFlashBag()->add('SuccessContactSendMail', 'Message Envoyé!');
          $contact->setReply(true);
        }
        $em->flush();

        return $this->render('@FttBackoffice/Messages/showMessage.html.twig', array('data' => $contact,'form' => $form->createView()));

    }


    public function ReplyContact($name, $mail,$messageSend,$messageReply,$dateSend)
    {
        $current_date = new \DateTime();

        $message = \Swift_Message::newInstance();
        //
        $message->setEncoder(\Swift_Encoding::get8BitEncoding());
        $logo = $message->embed(\Swift_Image::fromPath('/var/www/federation-tunisienne-tunnis/web/img/FTT.jpg'));
        $message->setSubject('FTTennis Réponse Message : ' . $name);
        $message->setFrom('fttpidev@gmail.com');
        $message->setTo($mail);
        $message->setBody(
            $this->renderView(
                'FttBackofficeBundle:Messages:FormatEnvoieEmail.html.twig',
                array('logo'=>$logo ,'name'=>$name, 'messageSend'=>$messageSend,'messageReply'=>$messageReply,'dateSend'=>$dateSend)
            ),
            'text/html'
        );

        $this->get('mailer')->send($message);






    }



}
