<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class CtacteDepositoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('monto', IntegerType::class,array(
                    'label' =>  'Monto Depositado',
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    )
                ))
                ->add('codigoComprobante', TextType::class,array(
                    'label' => 'Codigo Comprobante Deposito',
                    'attr'  =>  array(
                        'class' =>  'form-control'
                    )
                ))
                ->add(' Dar Aviso Deposito', SubmitType::class,array(
                    'attr'  => array(
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
            'data_class' => 'BackendBundle\Entity\Ctacte'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backendbundle_ctacte';
    }


}
