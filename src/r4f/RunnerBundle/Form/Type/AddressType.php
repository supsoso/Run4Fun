<?php
namespace r4f\RunnerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
			->add('zip_code', 'text');

    }

    public function getName()
    {
        return 'r4f_runnerbundle_addresstype';
    }
}
