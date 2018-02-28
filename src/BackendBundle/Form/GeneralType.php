<?php

namespace BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GeneralType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('inspector')->add('dateinspect')->add('inspectplan')->add('countryorigin')->add('commodityname')->add('variety')->add('productpackstyle')->add('label')->add('casestype')->add('caseperpallet')->add('grower')->add('size')->add('packingdate')->add('casesnetweight')->add('barcodeplu')->add('costumer')->add('shipper')->add('lot')->add('vasset')->add('container')->add('thier')->add('comments')->add('recommendation');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\General'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backendbundle_general';
    }


}
