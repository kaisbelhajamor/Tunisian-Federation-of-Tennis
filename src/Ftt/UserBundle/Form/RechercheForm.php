<?php
/**
 * Created by PhpStorm.
 * User: DELL-PC
 * Date: 07/01/2016
 * Time: 00:00
 */

namespace Ftt\UserBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RechercheForm extends  AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'cin',
                'text',
                array(
                    'attr' => array(
                        'placeholder' => 'N° Cin',
                    ),
                    'label' => false,
                )
            )
            -> add('submit','submit')

        ;
    }
       public function getName()
       {
            return 'RecherchForm';
       }
}