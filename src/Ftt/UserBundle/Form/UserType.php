<?php

namespace Ftt\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\True;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cin', 'integer', array('max_length'=>8))
            ->add('nom','text',array('required' => true))
            ->add('prenom','text',array('required' => true))
            ->add('tel', 'integer', array('max_length'=>15))
            ->add('typeUser', 'choice', array(
                'choices'  => array('ROLE_MEMBRE' => 'Simple Utilisateur',
                                    'ROLE_ARBITRE' => 'ARBITRE',
                                    'ROLE_JOUEUR' => 'Joueur',
                                    'ROLE_MEDECIN' => 'Medecin',
                                    'ROLE_RESP_ANTIDOPAGE' => 'Responsable Antidopage',
                                    'ROLE_EMPLOYE_FTT' => 'Personnel de la Fédération',

                    ),
                'required' => true,
            ))
            ->add('file')


        ;
    }

    public function getParent()
    {

         return 'fos_user_registration';
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ftt\UserBundle\Entity\User'
        ));
    }
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

}
