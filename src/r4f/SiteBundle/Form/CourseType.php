<?php
namespace r4f\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use r4f\SiteBundle\Entity\Map;
use r4f\SiteBundle\Form\AddressType;

class CourseType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
			->add('description', 'textarea')
			->add('length', 'text')
			->add('meeting_point', 'textarea')
			->add('start_point', new AddressType(), array(
                'property_path' => false,
                'data_class'         => 'r4f\SiteBundle\Entity\Address'
            ))
            ->add('end_point', new AddressType(), array(
                'property_path' => false,
                'data_class'         => 'r4f\SiteBundle\Entity\Address'                
            ))
        ;
    }

    public function getName()
    {
        return 'r4f_sitebundle_coursetype';
    }
	
	public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'r4f\SiteBundle\Entity\Course',
        );
    }
}
