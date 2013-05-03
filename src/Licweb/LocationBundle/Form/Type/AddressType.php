<?php

namespace Licweb\LocationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder
            ->add('street', null, array('required' => false))
            ->add('zipcode', null, array('required' => false))
            ->add('city', null, array('required' => false));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) 
    {
        $resolver->setDefaults(array(
                                    'data_class' => 'Licweb\LocationBundle\Entity\Address',
                                    'csrf_protection' => false
                                    ));
    }

    public function getName()
    {
        return 'address';
    }

}
