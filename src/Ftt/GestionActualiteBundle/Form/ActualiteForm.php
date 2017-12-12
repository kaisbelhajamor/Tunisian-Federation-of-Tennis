<?php
/**
 * Created by PhpStorm.
 * User: devcore
 * Date: 21/02/16
 * Time: 04:51
 */

namespace Ftt\GestionActualiteBundle\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ActualiteForm extends  AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            -> add('titre','text',array('required'=>true))

            -> add('description','textarea',array('required'=>true))
            ->add('categorie', 'choice', array(
                'choices'  => array(
                    'ACTUALITE_NATIONALE' => 'ACTUALITE NATIONALE',
                    'ACTUALITE_INTERNATIONALE' => 'ACTUALITE INTERNATIONALE',


                ),
                'required' => true,
            ))
            -> add('file')
            -> add('tags','text',array('required'=>true))
            -> add('Ajouter','submit')

        ;
    }
    public function getName()
    {
        return 'ActualiteForm';
    }
}