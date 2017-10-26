<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', TextType::class,array(
            'label'     =>  'Nombre',
            'required'  =>  'require',  
            'attr'      =>  array(
                    'class' =>  'form-control'
            )
        ))
                ->add('empresa', TextType::class,array(
            'label'     =>  'Empresa',
            'required'  =>  false,  
            'attr'      =>  array(
                    'class' =>  'form-control'
            )
        ))
                ->add('motivo', TextType::class,array(
            'label'     =>  'Motivo Contacto',
            'required'  =>  'require',  
            'attr'      =>  array(
                    'class' =>  'form-control'
            )
        ))
                ->add('comentario', TextareaType::class,array(
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    )
                ))
                ->add('Guardar', SubmitType::class, array(
                    'attr' => array(
                        'class' => 'btn  btn-success'
                    )
        ))
                ->add('Limpiar', \Symfony\Component\Form\Extension\Core\Type\ResetType::class,array(
                    'attr'  =>  array(
                        'class' =>  'btn btn-danger'
                    )
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Contacto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backendbundle_contacto';
    }


}
