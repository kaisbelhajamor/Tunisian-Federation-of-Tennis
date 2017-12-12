<?php

namespace Ftt\BackofficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;

class JoueurForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nomJoueur')
                ->add('prenomJoueur')
                ->add('dateNaissance', 'date', array(
                    'years' => range(date('Y') - 5, date('Y') - 50)
                        )
                )
                ->add('carriere', 'choice', array(
                    'choice_list' => new ChoiceList(
                            array('Amateur ', 'Professionnel'), array('Amateur ', 'Professionnel'))
                ))
            ->add('sexe', 'choice', array(
                'choices'  => array(
                    'F' => 'Femme',
                    'H' => 'Homme',


                )))
                ->add('club', 'entity', array(
                    'class' => 'FttBackofficeBundle:Club', 'property' => 'nom'
                ))
                ->add('points')
                ->add('Valider', 'submit');
    }

    public function getName() {
        return 'Joueur';
    }

}
