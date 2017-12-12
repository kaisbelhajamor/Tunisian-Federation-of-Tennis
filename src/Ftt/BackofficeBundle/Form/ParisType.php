<?php

namespace Ftt\BackofficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matchs')
            ->add('cote1')
            ->add('cote2')         
            ->add('date','date',array('years'=>  range(date('Y'),date('Y')+2)))
           /* ->add('matchs', 'choice', array('choices' => array( 'Nadal vs Federer'=>'Nadal vs Federer',
                                                                'Djokovic vs Murray'=>'Djokovic vs Murray',
                                                                'Soderling vs Tsonga'=>'Soderling vs Tsonga'),
                    'label' => 'Matchs : '))
           */





            ->add('submit', 'submit', array('label' => 'Ajouter'));
//            ->add('idMatch','entity',array(
//                'class' => 'FttBackofficeBundle:Matchs',
//                'property' => 'id'
//            ))     
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ftt\BackofficeBundle\Entity\Paris'
        ));
    }



    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_backofficebundle_paris';
    }
}