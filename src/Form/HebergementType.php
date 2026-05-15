<?php

namespace App\Form;

use App\Entity\Hebergement;
use App\Entity\CategorieHebergement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\File;

class HebergementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => ['class' => 'form-control']
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'choices' => [
                    'Hôtel' => 'HOTEL',
                    'Maison' => 'MAISON',
                    'Appartement' => 'APPARTEMENT',
                ],
                'required' => false,
                'attr' => ['class' => 'form-control select-dark']
            ])
            ->add('localisation', ChoiceType::class, [
                'label' => 'Localisation',
                'choices' => [
                    'Paris' => 'Paris',
                    'Lyon' => 'Lyon',
                    'Marseille' => 'Marseille',
                    'Toulouse' => 'Toulouse',
                    'Nice' => 'Nice',
                    'Nantes' => 'Nantes',
                    'Strasbourg' => 'Strasbourg',
                    'Montpellier' => 'Montpellier',
                    'Bordeaux' => 'Bordeaux',
                    'Lille' => 'Lille',
                    'Rennes' => 'Rennes',
                    'Reims' => 'Reims',
                    'Le Havre' => 'Le Havre',
                    'Saint-Étienne' => 'Saint-Étienne',
                    'Toulon' => 'Toulon',
                    'Grenoble' => 'Grenoble',
                    'Angers' => 'Angers',
                    'Dijon' => 'Dijon',
                    'Nîmes' => 'Nîmes',
                    'Aix-en-Provence' => 'Aix-en-Provence',
                    'Clermont-Ferrand' => 'Clermont-Ferrand',
                    'Brest' => 'Brest',
                    'Le Mans' => 'Le Mans',
                    'Amiens' => 'Amiens',
                    'Tours' => 'Tours',
                    'Limoges' => 'Limoges',
                    'Villeurbanne' => 'Villeurbanne',
                    'Metz' => 'Metz',
                    'Besançon' => 'Besançon',
                    'Orléans' => 'Orléans',
                ],
                'required' => true,
                'placeholder' => 'Sélectionner une ville',
                'attr' => ['class' => 'form-control select-dark']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['class' => 'form-control', 'rows' => 4]
            ])
            ->add('prixParNuit', NumberType::class, [
                'label' => 'Prix par nuit',
                'required' => false,
                'attr' => ['class' => 'form-control', 'step' => '0.01']
            ])
            ->add('disponibilite', ChoiceType::class, [
                'label' => 'Disponibilité',
                'choices' => [
                    'Disponible' => 'DISPONIBLE',
                    'Indisponible' => 'INDISPONIBLE',
                ],
                'required' => false,
                'attr' => ['class' => 'form-control select-dark']
            ])
            ->add('imagePath', FileType::class, [
                'label' => 'Image de l\'hébergement',
                'required' => false,
                'mapped' => false,
                'attr' => ['class' => 'form-control', 'accept' => 'image/*'],
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Veuillez televerser une image valide (JPG, PNG, GIF, WebP).',
                    ])
                ],
                'help' => 'Format: JPG, PNG, GIF, WebP. Max 5MB'
            ])
            ->add('galleryImages', FileType::class, [
                'label' => 'Galerie photos',
                'required' => false,
                'mapped' => false,
                'multiple' => true,
                'attr' => ['class' => 'form-control', 'accept' => 'image/*', 'multiple' => 'multiple'],
                'constraints' => [
                    new Assert\All([
                        new File([
                            'maxSize' => '5M',
                            'mimeTypes' => [
                                'image/jpeg',
                                'image/png',
                                'image/gif',
                                'image/webp',
                            ],
                            'mimeTypesMessage' => 'Veuillez televerser des images valides (JPG, PNG, GIF, WebP).',
                        ])
                    ])
                ],
                'help' => 'Ajoutez plusieurs photos pour que l’IA puisse identifier celles qui vendent le mieux.'
            ])
            ->add('categorie', EntityType::class, [
                'label' => 'Catégorie',
                'class' => CategorieHebergement::class,
                'choice_label' => 'nom',
                'required' => false,
                'placeholder' => 'Sélectionner une catégorie',
                'attr' => ['class' => 'form-control select-dark'],
                'property_path' => 'categorieHebergement'
            ])
            ->add('latitude', HiddenType::class, [
                'required' => false
            ])
            ->add('longitude', HiddenType::class, [
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hebergement::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'admin_hebergement',
        ]);
    }
}
