<?php

namespace CalificacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;


class CondicionFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', Filters\NumberFilterType::class)
            ->add('palletNumber', Filters\NumberFilterType::class)
            ->add('size', Filters\NumberFilterType::class)
            ->add('variety', Filters\TextFilterType::class)
            ->add('firmness', Filters\NumberFilterType::class)
            ->add('sunBurn', Filters\NumberFilterType::class)
            ->add('decay', Filters\NumberFilterType::class)
            ->add('mold', Filters\NumberFilterType::class)
            ->add('freezingInjury', Filters\NumberFilterType::class)
            ->add('pithyBrownCore', Filters\NumberFilterType::class)
            ->add('scald', Filters\NumberFilterType::class)
            ->add('shriveling', Filters\NumberFilterType::class)
            ->add('bruising', Filters\NumberFilterType::class)
            ->add('initInspect', Filters\DateTimeFilterType::class)
            ->add('endInspect', Filters\DateTimeFilterType::class)
            ->add('missHapenFruit', Filters\NumberFilterType::class)
            ->add('creasing', Filters\NumberFilterType::class)
            ->add('oleacellosisLigth', Filters\NumberFilterType::class)
            ->add('oceallosisModerate', Filters\NumberFilterType::class)
            ->add('oleacellosisSevere', Filters\NumberFilterType::class)
            ->add('sunburn', Filters\NumberFilterType::class)
            ->add('dehydrated', Filters\NumberFilterType::class)
            ->add('skinBreakdown', Filters\NumberFilterType::class)
            ->add('soft', Filters\NumberFilterType::class)
            ->add('puffiness', Filters\NumberFilterType::class)
            ->add('spotFumigationDamage', Filters\NumberFilterType::class)
            ->add('internalCondition', Filters\NumberFilterType::class)
            ->add('granulation', Filters\NumberFilterType::class)
            ->add('dryCells', Filters\NumberFilterType::class)
            ->add('brix', Filters\NumberFilterType::class)
            ->add('sumconditiondefects', Filters\NumberFilterType::class)
        
            ->add('lotes', Filters\EntityFilterType::class, array(
                    'class' => 'BackendBundle\Entity\Lotes',
                    'choice_label' => 'container',
            )) 
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
