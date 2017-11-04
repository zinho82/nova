<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MovimientosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('acciones', NumberType::class,array(
                    'label'     => 'Acciones a Comprar',
                    'attr'      =>  array(
                        'class' =>  'form-control',
                        
                    )
                ))
                ->add('tipoaccion', EntityType::class, array(
                    'label' => ' Tipo de Archivo',
                    'class' => 'BackendBundle\Entity\Config',
                    'choice_label' => 'txt',
                    'required' => 'require',
                    'placeholder' => 'Seleccione Tipo de Accion',
                    'empty_data' => null,
                    'attr' => array(
                        'class' => 'form-name form-control'),
                    'required' => false,
                    'query_builder' => function(\Doctrine\ORM\EntityRepository $co) {
                        return $co->createQueryBuilder('u')
                                ->where('u.pertenece=18')
                                ->orderBy('u.txt', 'asc');
                    }))
                    ->add('Ejecutar', SubmitType::class,array(
                        'attr'  =>  array(
                            'class' =>  'btn btn-success btn-block'
                        )
                    ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Movimientos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backendbundle_movimientos';
    }


}
