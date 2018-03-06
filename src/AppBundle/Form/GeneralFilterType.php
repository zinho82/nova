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
            ->add('id', Filters\NumberFilterType::class)
            ->add('inspectorName', Filters\TextFilterType::class)
            ->add('numberPallet', Filters\TextFilterType::class)
            ->add('dateInspection', Filters\DateTimeFilterType::class)
            ->add('inspectorPlanName', Filters\TextFilterType::class)
            ->add('countryOrigin', Filters\TextFilterType::class)
            ->add('commodityName', Filters\TextFilterType::class)
            ->add('variety', Filters\TextFilterType::class)
            ->add('productPackStyle', Filters\TextFilterType::class)
            ->add('label', Filters\TextFilterType::class)
            ->add('casesType', Filters\TextFilterType::class)
            ->add('casesPerPallet', Filters\TextFilterType::class)
            ->add('grower', Filters\TextFilterType::class)
            ->add('size', Filters\TextFilterType::class)
            ->add('packingDate', Filters\DateTimeFilterType::class)
            ->add('casesNetWeight', Filters\TextFilterType::class)
            ->add('barCodePlu', Filters\TextFilterType::class)
            ->add('costumer', Filters\TextFilterType::class)
            ->add('shipper', Filters\TextFilterType::class)
            ->add('lot', Filters\TextFilterType::class)
            ->add('vasset', Filters\TextFilterType::class)
            ->add('container', Filters\TextFilterType::class)
            ->add('thier', Filters\TextFilterType::class)
            ->add('comments', Filters\TextFilterType::class)
            ->add('recommendation', Filters\TextFilterType::class)
        
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
