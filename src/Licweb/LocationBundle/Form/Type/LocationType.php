<?php

namespace Licweb\LocationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder
            ->add('name', 'text', ['required' => 'required'])
            ->add('street', 'text', ['required' => 'required'])
            ->add('zipCode', 'text', ['required' => 'required'])
            ->add('city', 'text', ['required' => 'required'])
            ->add('presentation', 'textarea')
            ->add('phone_number');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) 
    {
        $resolver->setDefaults(array(
                                    'data_class' => 'Licweb\LocationBundle\Model\Location',
                                    'csrf_protection' => false
                                    ));
    }

    public function getName()
    {
        return 'location';
    }
}
