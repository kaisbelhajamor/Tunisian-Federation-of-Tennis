<?php
/**
 * Created by PhpStorm.
 * User: devcore
 * Date: 21/02/16
 * Time: 04:51
 */

namespace Ftt\NewsletterBundle\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class NewsletterSendForm extends  AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            -> add('description','textarea',array('required'=>true,'label'=>false,
                'attr' => array('cols' => '1650', 'rows' => '20'),

                ))

            -> add('Envoyer','submit')

        ;
    }
    public function getName()
    {
        return 'NewsletterSendForm';
    }
}