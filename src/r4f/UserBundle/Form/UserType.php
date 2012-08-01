<?php

namespace r4f\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('email')
            ->add('phone_number')
            ->add('aim')
            ->add('level')
            ->add('address')
        ;
    }

    public function getName()
    {
        return 'r4f_userbundle_usertype';
    }
}
