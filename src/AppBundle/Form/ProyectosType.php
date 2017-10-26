<?php

namespace AppBundle \Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProyectosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codigo', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            ),
            'label'     =>  'Codigo Proyecto',
            'required'  =>  'require'
        ))
                ->add('nombre', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            ),
            'label'     =>  'Nombre Proyecto',
            'required'  =>  'require'
        ))
                ->add('direccion', TextareaType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            ),
            'label'     =>  'Direccion Proyecto',
            'required'  =>  'require'
        ))
                ->add('descripcion', TextareaType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            ),
            'label'     =>  'Descripcion Proyecto',
            'required'  =>  'require'
        ))
                ->add('proyeccion', TextareaType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            ),
            'label'     =>  'Proyeccion Inversion Proyecto',
            'required'  =>  'require'
        ))
                ->add('uf', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            ),
            'label'     =>  'Valor UF Proyecto',
            'required'  =>  'require'
        ))
                ->add('acciones', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            ),
            'label'     =>  'Acciones Disponibles',
            'required'  =>  'require'
        ))
                ->add('valor', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            ),
            'label'     =>  'Valor Accion',
            'required'  =>  'require'
        ))
                ->add('vendidas', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            ),
            'label'     =>  'Acciones Vendidas',
            'required'  =>  'require'
        ))
                ->add('cop', TextType::class,array(
            'attr'  =>  array(
                'class' =>  'form-control'
            ),
            'label'     =>  'Costo Operacional Proyecto',
            'required'  =>  'require'
        ))
                ->add('fechaCompraEst')
                ->add('Guardar', SubmitType::class,array(
                    'attr'  =>  array(
                        'class' =>  'btn btn-success'
                    )
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Proyectos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backendbundle_proyectos';
    }


}
