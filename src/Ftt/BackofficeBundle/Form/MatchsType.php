<?php

namespace Ftt\BackofficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MatchsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeMatch')
            ->add('tournoi')
            ->add('Terrain', 'entity', array(
                    'class' => 'FttBackofficeBundle:Terrain', 'property' => 'nomTerrain'
                ))
            ->add('date')
            ->add('heure')
            ->add('resultat')
          
            ->add('joueur1', 'entity', array(
                    'class' => 'FttBackofficeBundle:Joueur', 'property' => 'prenomJoueur'
                ))
            ->add('joueur2', 'entity', array(
                    'class' => 'FttBackofficeBundle:Joueur', 'property' => 'prenomJoueur'
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ftt\BackofficeBundle\Entity\Matchs'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_backofficebundle_matchs';
    }
}
