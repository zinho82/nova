<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;


class CalidadManzanaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('insectDamage', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('russet', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('undersize', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('mechanicalDamage', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('bloom', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('lackOfColor', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('insectPresence', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('flowerRemains', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('contamination', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('idpallet');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Calidad'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backendbundle_calidad';
    }


}
