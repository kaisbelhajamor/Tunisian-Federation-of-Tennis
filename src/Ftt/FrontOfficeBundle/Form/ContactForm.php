<?php
/**
 * Created by PhpStorm.
 * User: devcore
 * Date: 21/02/16
 * Time: 04:51
 */

namespace Ftt\FrontOfficeBundle\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ContactForm extends  AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            -> add('name','text',array('required'=>true))
            -> add('mail','email',array('required'=>true))
            -> add('message','textarea',array('required'=>true))

            -> add('Envoyer','submit')

        ;
    }
    public function getName()
    {
        return 'ContactForm';
    }
}