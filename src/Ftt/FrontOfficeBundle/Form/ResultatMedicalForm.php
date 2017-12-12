<?php
/**
 * Created by PhpStorm.
 * User: devcore
 * Date: 21/02/16
 * Time: 04:51
 */

namespace Ftt\FrontOfficeBundle\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ResultatMedicalForm extends  AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            -> add('numeroEchantillon','integer',array('required'=>true))
           // -> add('datePrelevement','date',array('required'=>true))
            ->add('datePrelevement', 'date', array(
                    'label' => 'Date de publication',
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'dd/MM/yyyy')
            )



            ->add('joueur', 'entity', array(
                'class' => 'FttBackofficeBundle:Joueur', 'property' => 'prenomJoueur'
            ))
            -> add('ResultatTest','textarea',array('required'=>true))
            -> add('Envoyer','submit')

        ;
    }
    public function getName()
    {
        return 'ContactForm';
    }
}