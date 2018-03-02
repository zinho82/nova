<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;


class CalidadFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', Filters\NumberFilterType::class)
            ->add('size', Filters\NumberFilterType::class)
            ->add('variety', Filters\TextFilterType::class)
            ->add('casesNetWeigth', Filters\NumberFilterType::class)
            ->add('sampleNumber', Filters\NumberFilterType::class)
            ->add('barCodePlu', Filters\NumberFilterType::class)
            ->add('openAppearance', Filters\TextFilterType::class)
            ->add('blankEnd', Filters\NumberFilterType::class)
            ->add('blisterMiteInjure', Filters\NumberFilterType::class)
            ->add('discoloration', Filters\NumberFilterType::class)
            ->add('blush', Filters\NumberFilterType::class)
            ->add('lightBlush', Filters\NumberFilterType::class)
            ->add('scaring', Filters\NumberFilterType::class)
            ->add('hardEnd', Filters\NumberFilterType::class)
            ->add('insectDamage', Filters\NumberFilterType::class)
            ->add('russet', Filters\NumberFilterType::class)
            ->add('limbRubs', Filters\NumberFilterType::class)
            ->add('overripe', Filters\NumberFilterType::class)
            ->add('mealy', Filters\NumberFilterType::class)
            ->add('scab', Filters\NumberFilterType::class)
            ->add('shape', Filters\NumberFilterType::class)
            ->add('stermPunctureSkinBreaks', Filters\NumberFilterType::class)
            ->add('missingCalix', Filters\NumberFilterType::class)
        
            ->add('idpallet', Filters\EntityFilterType::class, array(
                    'class' => 'BackendBundle\Entity\General',
                    'choice_label' => 'inspectorName',
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
