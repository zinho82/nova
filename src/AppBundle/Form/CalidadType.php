<?php

namespace AppBundle\Form;

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
            ->add('missingCalix')
//            ->add('idpallet', EntityType::class, array(
//                'class' => 'BackendBundle\Entity\General',
//                'choice_label' => 'inspectorName',
//                'placeholder' => 'Please choose',
//                'empty_data' => null,
//                'required' => false
// 
//            )) 
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
