<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransportReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    // On ajoute TOUS les champs, tout le temps. Fini les crashs Twig.
    $builder
        ->add('dateDepart', DateType::class, [
            'widget' => 'single_text',
            'required' => false, // Ne bloque pas si c'est une voiture
        ])
        ->add('dateArrivee', DateType::class, [
            'widget' => 'single_text',
            'required' => false, // Ne bloque pas si c'est un avion
        ])
        ->add('nbAdultes', IntegerType::class, ['data' => 1, 'attr' => ['min' => 1]])
        ->add('nbEnfants', IntegerType::class, ['data' => 0, 'attr' => ['min' => 0]])
        ->add('nbBebes', IntegerType::class, ['data' => 0, 'attr' => ['min' => 0]]);
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
            'transport_type' => 'AVION', 
        ]);
        
        $resolver->setAllowedTypes('transport_type', 'string');
    }
}