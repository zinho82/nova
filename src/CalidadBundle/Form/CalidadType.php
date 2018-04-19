<?php

namespace CalidadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalidadType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('size')
            ->add('variety')
            ->add('casesNetWeigth')
            ->add('sampleNumber')
            ->add('barCodePlu')
            ->add('openAppearance')
            ->add('blankEnd')
            ->add('blisterMiteInjure')
            ->add('discoloration')
            ->add('blush')
            ->add('lightBlush')
            ->add('scaring')
            ->add('hardEnd')
            ->add('insectDamage')
            ->add('russet')
            ->add('limbRubs')
            ->add('overripe')
            ->add('mealy')
            ->add('scab')
            ->add('shape')
            ->add('stermPunctureSkinBreaks')
            ->add('stonyPit')
            ->add('missingCalix')
            ->add('initInspect')
            ->add('endInspect')
            ->add('brix')
            ->add('greenStem')
            ->add('brownStem')
            ->add('dryStem')
            ->add('sunkenStemEnd')
            ->add('translucent')
            ->add('grapeColor')
            ->add('amber')
            ->add('split')
            ->add('waterBerry')
            ->add('shotBerry')
            ->add('shalter')
            ->add('softBerries')
            ->add('so2Damage')
            ->add('dehydratedBerries')
            ->add('bruising')
            ->add('stemPuncture')
            ->add('crush')
            ->add('shiriveling')
            ->add('slipSkin')
            ->add('lackOfDegreening')
            ->add('colorPale')
            ->add('fruitWithSeeds')
            ->add('calixBrownBlack')
            ->add('skinDefectSevere')
            ->add('skinDefectModerate')
            ->add('misshapenFruit')
            ->add('wellFormed')
            ->add('undersize')
            ->add('brokenSkin')
            ->add('wormDamage')
            ->add('hailDamage')
            ->add('mechanicalDamage')
            ->add('stemEndDamage')
            ->add('misshapen')
            ->add('sprayBurn')
            ->add('spots')
            ->add('scald')
            ->add('splitPit')
            ->add('qualityScore')
            ->add('bloom')
            ->add('lackOfColor')
            ->add('insectPresence')
            ->add('flowerRemains')
            ->add('contamination')
            ->add('inspectdate')
            ->add('comments')
            ->add('lotes', EntityType::class, array(
                'class' => 'BackendBundle\Entity\Lotes',
                'choice_label' => 'container',
                'placeholder' => 'Please choose',
                'empty_data' => null,
                'required' => false
 
            )) 
            ->add('ejecutivo', EntityType::class, array(
                'class' => 'BackendBundle\Entity\Usuario',
                'choice_label' => 'username',
                'placeholder' => 'Please choose',
                'empty_data' => null,
                'required' => false
 
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
