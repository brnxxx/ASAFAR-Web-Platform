<?php

namespace App\Form;

use App\Entity\Excursion;
use App\Entity\Categorie;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;

class ExcursionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder

        ->add('titre', TextType::class, [
            'required' => false
        ])

        ->add('description', TextareaType::class, [
            'required' => false,
            'attr' => ['rows' => 3]
        ])

        ->add('lieu', TextType::class, [
            'required' => false
        ])

        ->add('date', DateType::class, [
            'widget' => 'single_text',
            'required' => false
        ])

        ->add('duree', IntegerType::class, [
            'required' => false
        ])

        ->add('nombrePlacesDisponibles', IntegerType::class, [
            'required' => false
        ])

        ->add('prixAdulte', NumberType::class, [
            'required' => false,
            'empty_data' => null
        ])

        ->add('prixEnfant', NumberType::class, [
            'required' => false,
            'empty_data' => null
        ])

        ->add('prixBebe', NumberType::class, [
            'required' => false,
            'empty_data' => null
        ])

        ->add('categorie', EntityType::class, [
            'class' => Categorie::class,
            'choice_label' => 'nom',
            'placeholder' => 'Choisir une catégorie',
            'required' => false
        ])

        ->add('imageFile', FileType::class, [
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new File([
                    'maxSize' => '2M',
                    'mimeTypes' => [
                        'image/jpeg',
                        'image/png',
                        'image/webp'
                    ],
                    'mimeTypesMessage' => 'Format invalide'
                ])
            ]
        ]);
}
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Excursion::class,
        ]);
    }
}