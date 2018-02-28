<?php

namespace AppBundle\Form;

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
            ->add('size', Filters\NumberFilterType::class)
            ->add('variety', Filters\TextFilterType::class)
            ->add('firmness', Filters\NumberFilterType::class)
            ->add('sunburn', Filters\NumberFilterType::class)
            ->add('decay', Filters\NumberFilterType::class)
            ->add('mold', Filters\NumberFilterType::class)
            ->add('freezinginjury', Filters\NumberFilterType::class)
            ->add('pithybrowncore', Filters\NumberFilterType::class)
            ->add('scald', Filters\NumberFilterType::class)
            ->add('shriveling', Filters\NumberFilterType::class)
            ->add('bruising', Filters\NumberFilterType::class)
        
            ->add('idpallet', Filters\EntityFilterType::class, array(
                    'class' => 'BackendBundle\Entity\General',
                    'choice_label' => 'inspector',
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
