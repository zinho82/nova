<?php

namespace LotesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LotesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('container')
            ->add('numberPallets')
            ->add('templateNumber')
            ->add('packingDate')
            ->add('label')
            ->add('comoditty')
            ->add('variety')
            ->add('pack')
            ->add('plu')
            ->add('quality')
            ->add('score')
            ->add('numBoxes')
            ->add('growerCode')
            ->add('growersName')
            ->add('exportador')
            ->add('consignne')
            ->add('vessel')
            ->add('pol')
            ->add('etd')
            ->add('pod')
            ->add('eta')
            ->add('fechaCarga')
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
            'data_class' => 'BackendBundle\Entity\Lotes'
        ));
    }
}
