<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\{
    TextType, EmailType, PasswordType, TelType, FileType, RepeatedType
};
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => ['placeholder' => 'Nom']
            ])

            ->add('prenom', TextType::class, [
                'attr' => ['placeholder' => 'Prénom']
            ])

            ->add('email', EmailType::class, [
                'attr' => ['placeholder' => 'Email']
            ])

            ->add('telephone', TelType::class, [
                'attr' => ['placeholder' => 'Téléphone']
            ])

            ->add('plainPassword', RepeatedType::class, [
                'type'            => PasswordType::class,
                'mapped'          => false,
                'invalid_message' => 'Les mots de passe ne correspondent pas',
                'first_options'   => [
                    'attr'        => ['placeholder' => 'Mot de passe'],
                    'constraints' => [
                        new NotBlank(['message' => 'Le mot de passe est obligatoire']),
                        new Length([
                            'min'        => 6,
                            'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères',
                        ]),
                    ],
                ],
                'second_options' => [
                    'attr' => ['placeholder' => 'Confirmer mot de passe'],
                ],
            ])

            ->add('image', FileType::class, [
                'required' => false,
                'mapped'   => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}