<?php

namespace Ftt\BackofficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TerrainType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomTerrain')
            ->add('adresseTerrain')
            ->add('capacite')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ftt\BackofficeBundle\Entity\Terrain'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ftt_backofficebundle_terrain';
    }
}
