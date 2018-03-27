<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;


class LotesFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', Filters\NumberFilterType::class)
            ->add('container', Filters\TextFilterType::class)
            ->add('numberPallets', Filters\TextFilterType::class)
            ->add('templateNumber', Filters\TextFilterType::class)
            ->add('packingDate', Filters\DateTimeFilterType::class)
            ->add('label', Filters\TextFilterType::class)
            ->add('comoditty', Filters\TextFilterType::class)
            ->add('variety', Filters\TextFilterType::class)
            ->add('pack', Filters\TextFilterType::class)
            ->add('plu', Filters\TextFilterType::class)
            ->add('quality', Filters\TextFilterType::class)
            ->add('score', Filters\TextFilterType::class)
            ->add('numBoxes', Filters\NumberFilterType::class)
            ->add('growerCode', Filters\TextFilterType::class)
            ->add('growersName', Filters\TextFilterType::class)
            ->add('exportador', Filters\TextFilterType::class)
            ->add('consignne', Filters\TextFilterType::class)
            ->add('vessel', Filters\TextFilterType::class)
            ->add('pol', Filters\TextFilterType::class)
            ->add('etd', Filters\TextFilterType::class)
            ->add('eta', Filters\TextFilterType::class)
        
            ->add('ejecutivo', Filters\EntityFilterType::class, array(
                    'class' => 'BackendBundle\Entity\Usuario',
                    'choice_label' => 'username',
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
