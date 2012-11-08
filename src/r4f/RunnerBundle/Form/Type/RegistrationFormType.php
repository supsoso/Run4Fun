<?php
namespace r4f\RunnerBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use r4f\RunnerBundle\Form\Type\AddressType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('phone_number')
            ->add('birthdate', 'date', array(
                'widget'        => 'choice', 
                'input'         => 'datetime', 
                'format'        => 'd/m/y', 
                'empty_value'   => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour'),
                'pattern'       => "{{ day }} / {{ month }} / {{ year }}",
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
            ->add('Adresse', new AddressType(), array(
                'property_path' => false,
                'data_class'    => 'r4f\SiteBundle\Entity\Address'
            ))
        ;
    }

    public function getName()
    {
        return 'r4f_user_registration';
    }
}
