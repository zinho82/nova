<?php

namespace CalificacionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CondicionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('missHapenFruit',  TextType::class,array(
                'label' =>  "Miss Hapen Fruit",
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                'required'  =>  true,
            ))
            ->add('creasing',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                'required'  =>  true,
                ))
            ->add('oleacellosisLigth',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control',
                ),
                'required'    =>  true,
    ))
            ->add('oceallosisModerate',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                'required'  =>  true,
                ))
            ->add('oleacellosisSevere',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                'required'  =>  true,
                ))
            ->add('sunburn',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),))
                ->add('decay',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                    'required'  =>  true,
                    ))
            ->add('mold',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                'required'  =>  true,
                    ))
            ->add('dehydrated',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                'required'  =>  true,
                ))
            ->add('skinBreakdown',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                'required'  =>  true,
                    ))
            ->add('soft',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                'required'  =>  true,
                ))
            ->add('puffiness',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                'required'  =>  true,
                    ))
            ->add('spotFumigationDamage',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                'required'  =>  true,
                    ))
            ->add('internalCondition',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                'required'  =>  true,
                ))
            ->add('granulation',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                'required'  =>  true,
                    ))
            ->add('dryCells',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                'required'  =>  true,
                    ))
            ->add('brix',  TextType::class,array(
                'attr'  => array(
                    'class' =>  'form-control'
                ),
                'required'  =>  true,
                    ))
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
