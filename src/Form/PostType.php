<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Titre du post...',
                    'class' => 'post-input',
                ],
            ])
            ->add('type', ChoiceType::class, [
                'label' => false,
                'choices' => [
                    'Promotion' => 'Promotion',
                    'Actualité' => 'Actualité',
                    'Conseil' => 'Conseil',
                    'Bon plan' => 'Bon plan',
                ],
                'attr' => [
                    'class' => 'post-select',
                ],
            ])
            ->add('contenu', TextareaType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Écrire quelque chose...',
                    'class' => 'post-textarea',
                    'rows' => 5,
                ],
            ])
            ->add('imagePath', FileType::class, [
                'label' => false,
                'required' => false,
                'mapped' => false,
                'data_class' => null,
                'attr' => [
                    'accept' => 'image/*',
                    'class' => 'native-file-input',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'admin_post',
        ]);
    }
}