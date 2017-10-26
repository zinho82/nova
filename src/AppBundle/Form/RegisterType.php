<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class RegisterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nombre', TextType::class,array(
                        'label' =>  'Nombre',
                        'attr'  =>  array(
                            'class' =>  'form-control'
                        ),
                        'required'  =>  'require'
                ))
                ->add('app', TextType::class,array(
                        'label' =>  'Apellido',
                        'attr'  =>  array(
                            'class' =>  'form-control'
                        ),
                        'required'  =>  'require'
                ))
                ->add('email', EmailType::class,array(
                        'label' =>  'Email',
                        'attr'  =>  array(
                            'class' =>  'form-control'
                        ),
                        'required'  =>  'require'
                ))
                ->add('password', PasswordType::class,array(
                        'label' =>  'Contraseña',
                        'attr'  =>  array(
                            'class' =>  'form-control'
                        ),
                        'required'  =>  'require'
                ))
                ->add('Registrarse', SubmitType::class,array(
                    'attr'  =>  array(
                        'class' => 'btn btn-success'
                    )
                ))
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Usuario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backendbundle_usuario';
    }


}
