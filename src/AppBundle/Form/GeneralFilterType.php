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
            ->add('inspector', Filters\TextFilterType::class)
            ->add('dateinspect', Filters\DateTimeFilterType::class)
            ->add('inspectplan', Filters\TextFilterType::class)
            ->add('countryorigin', Filters\TextFilterType::class)
            ->add('commodityname', Filters\TextFilterType::class)
            ->add('variety', Filters\TextFilterType::class)
            ->add('productpackstyle', Filters\TextFilterType::class)
            ->add('label', Filters\TextFilterType::class)
            ->add('casestype', Filters\TextFilterType::class)
            ->add('caseperpallet', Filters\TextFilterType::class)
            ->add('grower', Filters\TextFilterType::class)
            ->add('size', Filters\TextFilterType::class)
            ->add('packingdate', Filters\DateTimeFilterType::class)
            ->add('casesnetweight', Filters\TextFilterType::class)
            ->add('barcodeplu', Filters\TextFilterType::class)
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
