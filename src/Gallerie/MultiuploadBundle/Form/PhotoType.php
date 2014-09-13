<?php

namespace Gallerie\MultiuploadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PhotoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('files')
           
        
            
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => ' Gallerie\MultiuploadBundle\Entity\Photo'
            
        ));
    }

   

    public function getName() {
        return 'imagesdftype';
    }

   
}
