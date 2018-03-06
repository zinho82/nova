<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;


class CalidadManzanaType extends AbstractType
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
                ->add('missingCalix', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('initInspect', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('endInspect', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('brix', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('greenStem', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('brownStem', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('dryStem', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('sunkenStemEnd', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('translucent', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('grapeColor', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('amber', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('split', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('waterBerry', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('shotBerry', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('shalter', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('softBerries', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('so2Damage', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('dehydratedBerries', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('bruising', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('stemPuncture', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('crush', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('shiriveling', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('slipSkin', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('lackOfDegreening', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('colorPale', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('fruitWithSeeds', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('calixBrownBlack', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('skinDefectSevere', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('skinDefectModerate', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('misshapenFruit', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('wellFormed', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('undersize', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('brokenSkin', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('wormDamage', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('hailDamage', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('mechanicalDamage', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('stemEndDamage', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('misshapen', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('sprayBurn', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('spots', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('scald', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('splitPit', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('qualityScore', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('bloom', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('lackOfColor', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('insectPresence', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('flowerRemains', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('contamination', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            )
        ))
                ->add('idpallet');
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
