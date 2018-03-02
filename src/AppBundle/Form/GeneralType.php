<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GeneralType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('inspectorName')
            ->add('numberPallet')
            ->add('dateInspection')
            ->add('inspectorPlanName')
            ->add('countryOrigin')
            ->add('commodityName')
            ->add('variety')
            ->add('productPackStyle')
            ->add('label')
            ->add('casesType')
            ->add('casesPerPallet')
            ->add('grower')
            ->add('size')
            ->add('packingDate')
            ->add('casesNetWeight')
            ->add('barCodePlu')
            ->add('costumer')
            ->add('shipper')
            ->add('lot')
            ->add('vasset')
            ->add('container')
            ->add('thier')
            ->add('comments')
            ->add('recommendation')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\General'
        ));
    }
}
