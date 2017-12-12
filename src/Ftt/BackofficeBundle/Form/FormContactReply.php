<?php
/**
 * Created by PhpStorm.
 * User: devcore
 * Date: 11/04/16
 * Time: 12:27
 */

namespace Ftt\BackofficeBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FormContactReply extends  AbstractType
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
        return 'ContactSendMail';
    }

}



