<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nombre', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'formcontrol',
                ),
                'required'  =>  true,
                ))
            ->add('app', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'formcontrol',
                ),
                'required'  =>  true,
                ))
            ->add('apm', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'formcontrol',
                ),
                'required'  =>  false,
                ))
            ->add('username', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'formcontrol',
                ),
                'required'  =>  true,
            ))
            ->add('password', PasswordType::class,array(
                'attr'  =>  array(
                    'class' =>  'formcontrol',
                ),
                'required'  =>  true,
                ))
            
            ->add('role', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'formcontrol',
                ),
                'required'  =>  true,
                ))
            ->add('correo', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'formcontrol',
                ),
                'required'  =>  false,
                ))
            ->add('image', TextType::class,array(
                'attr'  =>  array(
                    'class' =>  'formcontrol',
                ),
                'required'  =>  false,
                ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Usuario'
        ));
    }
}
