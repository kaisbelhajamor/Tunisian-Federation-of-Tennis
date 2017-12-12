<?php

namespace Ftt\BackofficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TicketType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prix')
            ->add('date','date',array('years'=>  range(date('Y'),date('Y')+2)))
            ->add('nbtickets')  
             ->add('matchs')
//            ->add('idMatch','entity',array(
//                'class' => 'FttBackofficeBundle:Matchs',
//                'property' => 'id'
//            ))     
//        ;
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ftt\BackofficeBundle\Entity\Ticket'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_backofficebundle_ticket';
    }
}
