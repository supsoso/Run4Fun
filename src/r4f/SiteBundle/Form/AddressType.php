<?php
namespace r4f\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
			->add('address', 'text')
			->add('city', 'text')
			->add('zip_code', 'text')
			->add('country', 'text');
    }

    public function getName()
    {
        return 'r4f_SiteBundle_addresstype';
    }
	
	public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'r4f\SiteBundle\Entity\Address',
        );
    }
}