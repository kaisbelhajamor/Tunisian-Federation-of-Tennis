<?php

namespace Ftt\BackofficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;

class FormationType extends AbstractType
{
   
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      
        $builder
            ->add('nom')
            -> add('description','textarea',array('required'=>true,'label'=>false,
                'attr' => array('cols' => '1650', 'rows' => '10'),

                ))  
            ->add('lieux')
            ->add('dateOuverture')
            ->add('dateCloture')
            ->add('cible',  'choice', array(
        'choice_list' => new ChoiceList(
         array('Joueur ', 'Arbitre'),
          array('Joueur ', 'Arbitre')
        )));


        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ftt\BackofficeBundle\Entity\Formation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_backofficebundle_formation';
    }
}
