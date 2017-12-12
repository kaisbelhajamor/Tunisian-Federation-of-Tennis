<?php

namespace Ftt\UserBundle\Controller;

use Ftt\UserBundle\Form\RechercheForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ftt\UserBundle\Entity\User;
use Ftt\UserBundle\Form\UserType;

/**
 * User controller.
 *
 */
class UserController extends Controller
{

    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        $entities = new User();
        $request =$this->get('request');
        $formSearch = $this->createForm(new RechercheForm(),$entities);
        $formSearch->handleRequest($request);
        $em= $this->getDoctrine()->getManager();
        if($formSearch->isValid()){
            $cin = $formSearch->getData()->getCin();
            $entities = $em->getRepository("FttUserBundle:User")->createQueryBuilder('u')
                ->Where('u.cin LIKE :cin')
                ->setParameter('cin', $cin.'%')
                ->getQuery()
                ->getResult();}
        else{
            $entities = $em->getRepository('FttUserBundle:User')->findAll();
        }

        return $this->render('FttUserBundle:User:index.html.twig', array(
            'entities' => $entities,
            'form_search' => $formSearch->createView()
        ));
    }
    /**
     * Creates a new User entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new User();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $entity->upload();
            $this->addRoleUserFTT($typeUser =$form->getData());
            $mailer = $this->container->get('fos_user.mailer');
            $token = sha1(uniqid(mt_rand(), true));
            $entity->setConfirmationToken($token);
            $mailer->sendConfirmationEmailMessage($entity);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user_show', array('id' => $entity->getId())));
        }

        return $this->render('FttUserBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a User entity.
     *
     * @param User $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_create'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new User entity.
     *
     */
    public function newAction()
    {
        $entity = new User();
        $form   = $this->createCreateForm($entity);

        return $this->render('FttUserBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FttUserBundle:User:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FttUserBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a User entity.
    *
    * @param User $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(User $entity)
    {

        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing User entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            $entity->upload();
            //$entity->removeRole($entity->getRoles());
            $this->addRoleUserFTT($editForm->getData());
            $mailer = $this->container->get('fos_user.mailer');
            $token = sha1(uniqid(mt_rand(), true));
            $entity->setConfirmationToken($token);
            $mailer->sendConfirmationEmailMessage($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user_show', array('id' => $entity->getId())));

        }

        return $this->render('FttUserBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('FttUserBundle:User')->find($id);
        $em->remove($user);
        $em->flush();
        return $this->redirect($this->generateUrl('user'));
    }

    /**
     * Creates a form to delete a User entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
   /* public function sendMail(User $user)
    {
        $current_date = new \DateTime();

        $message = \Swift_Message::newInstance();
        //
        $message->setEncoder(\Swift_Encoding::get8BitEncoding());
        $logoPath = $this->container->getParameter('kernel.root_dir') . '/../web/img/FTT.jpg';
        $logoPath = preg_replace("/app..../i", "", $logoPath);
        $logoPath = preg_replace("/\\\\/", "/", $logoPath);
        $logo = $message->embed(\Swift_Image::fromPath($logoPath));
        $message->setSubject('FTTennis-Creation de compte -' . $current_date->format('Y-m-d'));
        $message->setFrom('fttpidev@gmail.com');
        $message->setTo($user->getEmail());
        // $message->attach(\Swift_Attachment::fromPath('/var/www/federation-tunisienne-tunnis/web/img/FTT.jpg')
        //       ->setDisposition('inline'));
        $message->setBody(
            $this->renderView(
            // app/Resources/views/Emails/registration.html.twig
                'FttUserBundle:User:UserSendMail.html.twig',
                array('current_date' => $current_date,'logo'=>$logo ,'entity'=>$user)
            ),
            'text/html'
        );

        $this->get('mailer')->send($message);

    }
*/

    public function activateUserAction($id){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('FttUserBundle:User')->find($id);
        $user->setEnabled(true);
        $em->flush();
        return $this->redirect($this->generateUrl('user'));

    }
    public function blockUserAction($id){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('FttUserBundle:User')->find($id);
        $user->setEnabled(false);
        $em->flush();
        return $this->redirect($this->generateUrl('user'));

    }
    public  function SearchAction(){

        $user = new User();
        $request =$this->get('request');
        $formSearch = $this->createForm(new RechercheForm(),$user);
        $formSearch->handleRequest($request);
        $em= $this->getDoctrine()->getManager();
        if($formSearch->isValid()){
            $cin = $formSearch->getData()->getCin();
            $user = $em->getRepository('FttUserBundle:User')->findBy(array("cin"=>$cin));
        }else{

            $user = $em->getRepository('FttUserBundle:User')->findAll();
        }
        return ($this->render('@FOSUser/Group/list.html.twig',array('entities' => $user,'form_search' => $form->createView())));


    }
    public function addRoleUserFTT($entity){
        if($entity->getTypeUser()=="ROLE_EMPLOYE_FTT"){
            $entity->addRole('ROLE_ADMIN');
            $entity->setTypeUser('ROLE_EMPLOYE_FTT');
        }
        if($entity->getTypeUser()=="ROLE_MEDECIN"){
            $entity->addRole('ROLE_MEDECIN');
            $entity->setTypeUser('ROLE_MEDECIN');
        }
        if($entity->getTypeUser()=="ROLE_ARBITRE"){
            $entity->addRole('ROLE_ARBITRE');
            $entity->setTypeUser('ROLE_ARBITRE');
        }
        if($entity->getTypeUser()=="ROLE_JOUEUR"){
            $entity->addRole('ROLE_JOUEUR');
            $entity->setTypeUser('ROLE_JOUEUR');
        }
        if($entity->getTypeUser()=="ROLE_RESP_ANTIDOPAGE"){
            $entity->addRole('ROLE_RESP_ANTIDOPAGE');
            $entity->setTypeUser('ROLE_RESP_ANTIDOPAGE');
        }
        if($entity->getTypeUser()=="ROLE_MEMBRE"){
            $entity->addRole('ROLE_MEMBRE');
            $entity->setTypeUser('ROLE_MEMBRE');
        }


    }






}
