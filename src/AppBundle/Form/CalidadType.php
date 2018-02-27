<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class CalidadType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('idpallet', EntityType::class, array(
                    'attr'  =>  array(
                    'class' =>  'form-control'
                ),
                'class' => 'BackendBundle\Entity\General',
                'choice_label' => 'inspector',
                'placeholder' => 'Please choose',
                'empty_data' => null,
                'required' => false
 
            ))
            ->add('size', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('variety', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('casesnetweigth', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('samplenumber', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('barcodeplu', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('openappearance', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('blankend', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('blistermiteinjure', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('discoloration', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('blush', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('lightblush', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('scaring', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('hardend', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('insectdamage', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('russet', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('limbrubs', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('overripe', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('mealy', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('scab', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('shape', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('stermpunctureskinbreaks', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            ->add('missingcalix', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                ),
            ))
            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Calidad'
        ));
    }
}
