<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateArrivee', DateType::class, [
                'label' => 'Date d\'arrivée',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control', 'min' => (new \DateTime())->format('Y-m-d')]
            ])
            ->add('dateDepart', DateType::class, [
                'label' => 'Date de départ',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control', 'min' => (new \DateTime())->format('Y-m-d')]
            ])
            ->add('nbAdultes', IntegerType::class, [
                'label' => 'Nombre d\'adultes',
                'attr' => ['class' => 'form-control', 'min' => 1],
                'data' => 1
            ])
            ->add('nbEnfants', IntegerType::class, [
                'label' => 'Nombre d\'enfants',
                'attr' => ['class' => 'form-control', 'min' => 0],
                'data' => 0,
                'required' => false
            ])
            ->add('nbBebes', IntegerType::class, [
                'label' => 'Nombre de bébés',
                'attr' => ['class' => 'form-control', 'min' => 0],
                'data' => 0,
                'required' => false
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'En attente' => 'EN_ATTENTE',
                    'Confirmée' => 'CONFIRMEE',
                    'Annulée' => 'ANNULEE',
                ],
                'attr' => ['class' => 'form-control select-styled'],
                'data' => 'EN_ATTENTE'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
