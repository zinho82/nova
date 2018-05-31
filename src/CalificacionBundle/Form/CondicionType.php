<?php

namespace CalificacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CondicionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('palletNumber')
            ->add('size')
            ->add('variety')
            ->add('firmness')
            ->add('sunBurn')
            ->add('decay')
            ->add('mold')
            ->add('freezingInjury')
            ->add('pithyBrownCore')
            ->add('scald')
            ->add('shriveling')
            ->add('bruising')
            ->add('initInspect')
            ->add('endInspect')
            ->add('lotes', EntityType::class, array(
                'class' => 'BackendBundle\Entity\Lotes',
                'choice_label' => 'container',
                'placeholder' => 'Please choose',
                'empty_data' => null,
                'required' => false
 
            )) 
            ->add('ejecutivo', EntityType::class, array(
                'class' => 'BackendBundle\Entity\Usuario',
                'choice_label' => 'username',
                'placeholder' => 'Please choose',
                'empty_data' => null,
                'required' => false
 
            )) 
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Condicion'
        ));
    }
}
