<?php
namespace r4f\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use r4f\SiteBundle\Entity\Address;

class MapType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
			->add('priority', 'text')	
			->add('address', new AddressType);	
    }

    public function getName()
    {
        return 'r4f_sitebundle_maptype';
    }
	
	public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'r4f\SiteBundle\Entity\Address',
        );
    }
}
