<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class LotesType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('container',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('numberPallets',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('templateNumber',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('packingDate')
                ->add('label',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('comoditty',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('variety',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('pack',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('plu',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('quality',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('score',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('numBoxes',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('growerCode',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('growersName',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('exportador',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('consignne',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('vessel',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('pol',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('etd')
                ->add('pod',TextType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    ),
                ))
                ->add('eta')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Lotes'
        ));
    }

}
