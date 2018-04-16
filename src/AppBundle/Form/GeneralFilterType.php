<?php

namespace AppBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;
 

class GeneralFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('inspectorName', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('numberPallet', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('dateInspection', Filters\DateTimeFilterType::class)
            ->add('inspectorPlanName', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('countryOrigin', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('commodityName', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('variety', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('productPackStyle', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('label', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('casesType', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('casesPerPallet', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('grower', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('size', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('packingDate', Filters\TextFilterType::class)
            ->add('casesNetWeight', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('barCodePlu', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('costumer', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('shipper', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('lot', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('vasset', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('container', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
            ->add('thier', Filters\TextFilterType::class,array(
                'attr'  =>  array(
                    'class' => 'form-control')
            ))
        
        ;
        $builder->setMethod("GET");


    }

    public function getBlockPrefix()
    {
        return null;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'allow_extra_fields' => true,
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }
}
