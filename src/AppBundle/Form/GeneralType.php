<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
class GeneralType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numberPallet', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('inspectorPlanName', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('countryOrigin', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('commodityName', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('variety', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('productPackStyle', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('label', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('casesType', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('casesPerPallet', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('grower', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('size', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('packingDate', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('casesNetWeight', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('barCodePlu', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('costumer', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('shipper', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('lot', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('vasset', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('container', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('thier', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
            ->add('comments', CKEditorType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control',
                'placeholder'   =>  'Comments'
            )
        ))
            ->add('recommendation', CKEditorType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control',
                'placeholder'   =>  'Recomendations',
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
            'data_class' => 'BackendBundle\Entity\General'
        ));
    }
}
