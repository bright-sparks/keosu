<?php

namespace Keosu\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SplashscreensType extends AbstractType
{
    
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('splashscreenA320x436','file',array(
				'required'	=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))		
		->add('splashscreenA320x470','file',array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenA640x480','file',array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenA960x720','file',array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenI320x480','file',array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenI640x960','file',array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenI640x1136','file',array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenI1024x768','file',array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenI768x1024','file',array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenI2048x1536','file',array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))							
		->add('splashscreenI1536x2048','file',array(
				'required'=>false,
				'label'		=> false,
				'attr'      => array(
						'accept' => 'image/*'
		)))
		->add('splashscreenI750x1334','file',array(
			'required'=>false,
			'label'		=> false,
			'attr'      => array(
				'accept' => 'image/*'
		)))
		->add('splashscreenI1242x2208','file',array(
			'required'=>false,
			'label'		=> false,
			'attr'      => array(
				'accept' => 'image/*'
			)))
		->add('splashscreenI2208x1242','file',array(
			'required'=>false,
			'label'		=> false,
			'attr'      => array(
				'accept' => 'image/*'
			)))
		;
	
	}
	
	

	
	
	
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Keosu\CoreBundle\Model\Splashscreens'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'keosu_corebundle_splashscreens';
    }
}

