<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('from', TextType::class)
            ->add('to', TextType::class)
            // ->add('persons', ChoiceType::class, [
            //     'choices'  => [
            //         'Persons' => '',
            //         '1' => '1',
            //         '2' => '2',
            //         '3' => '3',
            //         '4' => '4',
            //         '5' => '5',
            //         '6' => '6',
            //         '7' => '7',
            //         '8' => '8',
            //         '9' => '9',
            //         '10' => '10',
            //     ],
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
