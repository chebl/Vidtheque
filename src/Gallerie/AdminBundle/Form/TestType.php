<?php

namespace Gallerie\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
         
         
             ->add('files','file', array(
                
            'label' => 'Images',
            'required' => false,
            'attr' => array(
                'accept' => '/image/*',
                'multiple' => true
            )))
            
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gallerie\AdminBundle\Entity\Test'
        ));
    }

   

    public function getName() {
        return 'mediatesttype';
    }

   
}
