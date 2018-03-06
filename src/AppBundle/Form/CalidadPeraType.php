<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;


class CalidadPeraType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('size', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('variety', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('casesNetWeigth', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('sampleNumber', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('barCodePlu', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('openAppearance', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('blankEnd', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('blisterMiteInjure', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('discoloration', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('blush', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('lightBlush', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('scaring', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('hardEnd', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
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
                ->add('limbRubs', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('overripe', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('mealy', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('scab', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('shape', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('stermPunctureSkinBreaks', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                 ->add('stonypit', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('missingCalix', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ;
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
