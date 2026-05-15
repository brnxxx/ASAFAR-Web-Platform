<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BackofficeUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options['is_edit'] ?? false;

        $builder
           // Prénom
->add('prenom', TextType::class, [
    'label' => 'Prénom',
    'attr' => [
        'placeholder' => 'Entrez le prénom',
        'class' => 'form-control',
    ],
])

// Nom
->add('nom', TextType::class, [
    'label' => 'Nom',
    'attr' => [
        'placeholder' => 'Entrez le nom',
        'class' => 'form-control',
    ],
])

// Email
->add('email', EmailType::class, [
    'label' => 'Email',
    'attr' => [
        'placeholder' => 'exemple@email.com',
        'class' => 'form-control',
    ],
])

// Téléphone
->add('telephone', TextType::class, [
    'label' => 'Téléphone',
    'required' => false,
    'attr' => [
        'placeholder' => '8 chiffres (ex: 61234567)',
        'class' => 'form-control',
    ],
])

// Rôle
->add('role', ChoiceType::class, [
    'label' => 'Rôle',
    'choices' => [
        'Client' => 'client',
        'Prestataire' => 'prestataire',
        'Modérateur' => 'moderateur',
        'Administrateur' => 'admin',
    ],
    'attr' => ['class' => 'form-control'],
])

// Statut
->add('statut', ChoiceType::class, [
    'label' => 'Statut',
    'choices' => [
        'Actif' => 'actif',
        'Inactif' => 'inactif',
        'Bloqué' => 'bloqué',
    ],
    'attr' => ['class' => 'form-control'],
]);

// Mot de passe
if (!$isEdit) {
    $builder
        ->add('plainPassword', RepeatedType::class, [
            'type' => PasswordType::class,
            'required' => true,
            'first_options' => [
                'label' => 'Mot de passe',
                'attr' => [
                    'placeholder' => 'Min. 6 caractères',
                    'class' => 'form-control',
                ]
            ],
            'second_options' => [
                'label' => 'Confirmer le mot de passe',
                'attr' => [
                    'placeholder' => 'Confirmez le mot de passe',
                    'class' => 'form-control',
                ]
            ],
            'invalid_message' => 'Les mots de passe ne correspondent pas',
            'mapped' => false,
        ]);
}
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'is_edit' => false,
        ]);
        $resolver->setAllowedTypes('is_edit', 'bool');
    }
}