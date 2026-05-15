<?php

namespace App\Form;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class)
            ->add('description', TextType::class)
          
->add('imageFile', FileType::class, [
    'label' => 'Image',
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
            'mimeTypesMessage' => 'Formats autorisés: JPG, PNG, WEBP',
        ])
    ]
]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}