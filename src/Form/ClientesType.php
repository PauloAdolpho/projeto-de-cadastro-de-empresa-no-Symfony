<?php

namespace App\Form;

use App\Entity\Clientes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('dataDeNascimento', DateType::class, ['widget'=>'single_text'])
            ->add('telefone')
            ->add('endereco')
            ->add('cpf')
            ->add('usuario')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Clientes::class,
        ]);
    }
}
