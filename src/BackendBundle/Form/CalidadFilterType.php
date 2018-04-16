<?php

namespace BackendBundle\Form;

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
            ->add('initInspect', Filters\DateTimeFilterType::class)
            ->add('endInspect', Filters\DateTimeFilterType::class)
            ->add('brix', Filters\NumberFilterType::class)
            ->add('greenStem', Filters\NumberFilterType::class)
            ->add('brownStem', Filters\NumberFilterType::class)
            ->add('dryStem', Filters\NumberFilterType::class)
            ->add('sunkenStemEnd', Filters\NumberFilterType::class)
            ->add('translucent', Filters\NumberFilterType::class)
            ->add('grapeColor', Filters\NumberFilterType::class)
            ->add('amber', Filters\NumberFilterType::class)
            ->add('split', Filters\NumberFilterType::class)
            ->add('waterBerry', Filters\NumberFilterType::class)
            ->add('shotBerry', Filters\NumberFilterType::class)
            ->add('shalter', Filters\NumberFilterType::class)
            ->add('softBerries', Filters\NumberFilterType::class)
            ->add('so2Damage', Filters\NumberFilterType::class)
            ->add('dehydratedBerries', Filters\NumberFilterType::class)
            ->add('bruising', Filters\NumberFilterType::class)
            ->add('stemPuncture', Filters\NumberFilterType::class)
            ->add('crush', Filters\NumberFilterType::class)
            ->add('shiriveling', Filters\NumberFilterType::class)
            ->add('slipSkin', Filters\NumberFilterType::class)
            ->add('lackOfDegreening', Filters\NumberFilterType::class)
            ->add('colorPale', Filters\NumberFilterType::class)
            ->add('fruitWithSeeds', Filters\NumberFilterType::class)
            ->add('calixBrownBlack', Filters\NumberFilterType::class)
            ->add('skinDefectSevere', Filters\NumberFilterType::class)
            ->add('skinDefectModerate', Filters\NumberFilterType::class)
            ->add('misshapenFruit', Filters\NumberFilterType::class)
            ->add('wellFormed', Filters\NumberFilterType::class)
            ->add('undersize', Filters\NumberFilterType::class)
            ->add('brokenSkin', Filters\NumberFilterType::class)
            ->add('wormDamage', Filters\NumberFilterType::class)
            ->add('hailDamage', Filters\NumberFilterType::class)
            ->add('mechanicalDamage', Filters\NumberFilterType::class)
            ->add('stemEndDamage', Filters\NumberFilterType::class)
            ->add('misshapen', Filters\NumberFilterType::class)
            ->add('sprayBurn', Filters\NumberFilterType::class)
            ->add('spots', Filters\NumberFilterType::class)
            ->add('scald', Filters\NumberFilterType::class)
            ->add('splitPit', Filters\NumberFilterType::class)
            ->add('qualityScore', Filters\TextFilterType::class)
            ->add('bloom', Filters\NumberFilterType::class)
            ->add('lackOfColor', Filters\NumberFilterType::class)
            ->add('insectPresence', Filters\NumberFilterType::class)
            ->add('flowerRemains', Filters\NumberFilterType::class)
            ->add('contamination', Filters\NumberFilterType::class)
        
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
