<?php

namespace Licweb\LocationBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder
            ->add('author', 'text', ['required' => 'required'])
            ->add('message', 'textarea', ['required' => 'required']);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) 
    {
        $resolver->setDefaults(array(
                                    'data_class' => 'Licweb\LocationBundle\Model\Comment',
                                    'csrf_protection' => false
                                    ));
    }

    public function getName()
    {
        return 'comment';
    }
}
