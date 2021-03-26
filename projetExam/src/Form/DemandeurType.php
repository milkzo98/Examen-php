<?php

namespace App\Form;

use App\Entity\Demandeur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;



class DemandeurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                                    
                                    ->add("Nom", TextType::class,
                                        [
                                        'attr' => [
                                            'class' => 'col-8',
                                            'placeholder' => 'Nom',
                                        ]
                                    ])
                                    ->add('Prenom', TextType::class,
                                    [
                                    'attr' => [
                                        'class' => 'form-control',
                                        'placeholder' => 'Prenom',
                                    ]
                                ])
                                ->add('Age', NumberType::class,
                                [
                                'attr' => [
                                    'class' => 'form-control',
                                    'placeholder' => 'Age',
                                ]
                            ])
                            ->add('Adresse', TextType::class,
                            [
                            'attr' => [
                                'class' => 'form-control',
                                'placeholder' => 'Adresse',
                            ]
                        ])
                        ->add('Email', TextType::class,
                        [
                        'attr' => [
                            'class' => 'form-control',
                            'placeholder' => 'Email',
                        ]
                        ])          
                        ->add('Telephone', TextType::class,
                        [
                        'attr' => [
                            'class' => 'form-control',
                            'placeholder' => 'Telephone',
                        ]
                        ])
                        ->add('Specialite', TextType::class,
                        [
                        'attr' => [
                            'class' => 'form-control',
                            'placeholder' => 'Specialite',
                        ]
                        ])
                        ->add('Niveau', TextType::class,
                        [
                        'attr' => [
                            'class' => 'form-control',
                            'placeholder' => 'Niveau',
                        ]
                        ])
                        ->add('Experience', TextType::class,
                        [
                        'attr' => [
                            'class' => 'form-control',
                            'placeholder' => 'Experience',
                        ]
                        ])


                                ;
                            }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Demandeur::class,
        ]);
    }
}
