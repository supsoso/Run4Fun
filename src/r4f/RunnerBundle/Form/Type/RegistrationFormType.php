<?php
namespace r4f\RunnerBundle\Form\Type;

use Symfony\Component\Form\FormBuilder;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('phone_number')
            ->add('birthdate', 'date', array('widget' => 'choice', 
                                            'input' => 'timestamp', 
                                            'format' => 'd/M/y', 
                                            'empty_value' => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour'),
                                            'pattern' => "{{ day }} / {{ month }} / {{ year }}",
                                            'data_timezone' => "Europe/Paris",
                                            'user_timezone' => "Europe/Paris",
                                            'years'         => range(date('Y')-5, date('Y')-70)

                                            ))
                    
            ->add('sexe', 'choice', array(
                'multiple' => false,
                'expanded' => true,
                'choices' => array(
                    'H' => 'H',
                    'F' => 'F'
                )
            ))
            ->add('level')
            ->add('aim')
            ->add('address')
        ;
    }

    public function getName()
    {
        return 'r4f_user_registration';
    }
}
