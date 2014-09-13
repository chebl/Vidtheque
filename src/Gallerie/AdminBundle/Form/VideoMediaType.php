<?php

namespace Gallerie\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VideoMediaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('libelle')
           ->add('description')
           ->add('file')
           
        
            
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gallerie\AdminBundle\Entity\VideoMedia'
        ));
    }

   

    public function getName() {
        return 'mediavideotype';
    }

   
}
