<?php

namespace App\Form;

use App\Entity\Spaceship;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UpdateSpaceshipType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name: ',
                'attr' => [
                    'placeholder' => 'Spaceship name'
                ]
            ])
            ->add('model', TextType::class, [
                'label' => 'Model: ',
                'attr' => [
                    'placeholder' => 'Model'
                ]
            ])
            ->add('manufacturer', TextType::class, [
                'label' => 'Manufacturer: ',
                'attr' => [
                    'placeholder' => 'Manufacturer'
                ]
            ])
            ->add('cost_in_credits', TextType::class, [
                'label' => 'Cost in Credits: ',
                'attr' => [
                    'placeholder' => 'Cost in Credits'
                ]
            ])
            ->add('length', TextType::class, [
                'label' => 'Length: ',
                'attr' => [
                    'placeholder' => 'Length'
                ]
            ])
            ->add('max_atmosphering_speed', TextType::class, [
                'label' => 'Max Atmosphering Speed: ',
                'attr' => [
                    'placeholder' => 'Max Atmosphering Speed'
                ]
            ])
            ->add('crew', TextType::class, [
                'label' => 'Crew: ',
                'attr' => [
                    'placeholder' => 'Crew'
                ]
            ])
            ->add('passengers', TextType::class, [
                'label' => 'Passengers: ',
                'attr' => [
                    'placeholder' => 'Passengers'
                ]
            ])
            ->add('cargo_capacity', TextType::class, [
                'label' => 'Cargo Capacity: ',
                'attr' => [
                    'placeholder' => 'Cargo Capacity'
                ]
            ])
            ->add('consumables', TextType::class, [
                'label' => 'Consumables: ',
                'attr' => [
                    'placeholder' => 'Consumables'
                ]
            ])
            ->add('hyperdrive_rating', TextType::class, [
                'label' => 'Hyperdrive Rating: ',
                'attr' => [
                    'placeholder' => 'Hyperdrive Rating'
                ]
            ])
            ->add('MGLT', TextType::class, [
                'label' => 'MGLT: ',
                'attr' => [
                    'placeholder' => 'MGLT'
                ]
            ])
            ->add('starship_class', TextType::class, [
                'label' => 'Starship Class: ',
                'attr' => [
                    'placeholder' => 'Starship Class'
                ]
            ])
            ->add('url', TextType::class, [
                'label' => 'Photo: ',
                'attr' => [
                    'placeholder' => 'url'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Save Changes',
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}