<?php
namespace r4f\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
			->add('text', 'textarea');
    }

    public function getName()
    {
        return 'r4f_SiteBundle_messagetype';
    }
	
	public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'r4f\SiteBundle\Entity\Message',
        );
    }
}