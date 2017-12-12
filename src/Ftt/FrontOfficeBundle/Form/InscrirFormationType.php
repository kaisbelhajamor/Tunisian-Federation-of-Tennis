<?php

namespace Ftt\FrontOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InscrirFormationType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom')
                ->add('prenom')
                ->add('cin')
                ->add('mail','email',array('required'=>true))
                ->add('grade')
                ->add('etat','hidden')
                ->add('idformation','hidden')
                ->add('Valider', 'submit');
        
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Ftt\FrontOfficeBundle\Entity\InscrirFormation'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ftt_frontofficebundle_inscrirformation';
    }

}
