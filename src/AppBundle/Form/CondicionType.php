<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CondicionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('idpallet', EntityType::class, array(
                'class' => 'BackendBundle\Entity\General',
                'choice_label' => 'inspector',
                'placeholder' => 'Please choose',
                'empty_data' => null,
                'required' => false
 
            )) 
            ->add('size')
            ->add('variety')
            ->add('firmness')
            ->add('sunburn')
            ->add('decay')
            ->add('mold')
            ->add('freezinginjury')
            ->add('pithybrowncore')
            ->add('scald')
            ->add('shriveling')
            ->add('bruising')
            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Condicion'
        ));
    }
}
