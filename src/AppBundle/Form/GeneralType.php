<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class GeneralType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('numpallet', TextType::class,array(
                   'attr'  =>  array(
                    'class' =>  'form-control'
                ),
                    'required'  => true,
                    'label'     =>  'Numero de Pallet',
                ))
            ->add('inspector', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('dateinspect')
            ->add('inspectplan', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('countryorigin', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('commodityname', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('variety', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('productpackstyle', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('label', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('casestype', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('caseperpallet', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('grower', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('size', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('packingdate')
            ->add('casesnetweight', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('barcodeplu', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('costumer', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('shipper', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('lot', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('vasset', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('container', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('thier', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('comments', CKEditorType::class,array(
                'label' =>  'Comments',
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
            ->add('recommendation', CKEditorType::class,array(
                'label' =>  'Recommendations',
                'attr'  =>  array(
                    'class' =>  'form-control'
                )
            ))
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
