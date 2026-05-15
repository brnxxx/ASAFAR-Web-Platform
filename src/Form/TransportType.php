<?php

namespace App\Form;

use App\Entity\Transport;
use App\Entity\Aeroport;
use App\Repository\AeroportRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\CallbackTransformer;

class TransportType extends AbstractType
{
    public function __construct(private AeroportRepository $aeroportRepository)
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du Transport',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: Paris vers Lyon Express',
                    'autocomplete' => 'off'
                ]
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type de Transport',
                'required' => true,
                'choices' => [
                    'Avion' => 'AVION',
                    'Voiture' => 'VOITURE',
                ],
                'placeholder' => 'Sélectionnez un type...',
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('prix', MoneyType::class, [
                'label' => 'Prix',
                'currency' => 'EUR',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '0.00',
                    'step' => '0.01'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 5,
                    'placeholder' => 'Décrivez les détails du transport...'
                ]
            ])
            ->add('aeroportDepart', HiddenType::class, [
                'required' => false,
                'attr' => ['id' => 'transport_form_aeroportDepart_hidden']
            ])
            ->add('aeroportDestination', HiddenType::class, [
                'required' => false,
                'attr' => ['id' => 'transport_form_aeroportDestination_hidden']
            ])
            ->add('aeroportPriseEnCharge', HiddenType::class, [
                'required' => false,
                'attr' => ['id' => 'transport_form_aeroportPriseEnCharge_hidden']
            ])
        ;

        // Add transformers for airport fields - convert ID strings to entity objects
        foreach (['aeroportDepart', 'aeroportDestination', 'aeroportPriseEnCharge'] as $fieldName) {
            $builder->get($fieldName)->addViewTransformer(
                new CallbackTransformer(
                    // Transform: entity to ID for form display
                    fn($entity) => $entity ? (string)$entity->getId() : '',
                    // Reverse transform: ID string back to entity
                    fn($id) => $this->transformAirportId($id)
                )
            );
        }
    }

    private function transformAirportId(int|string|null $id): ?Aeroport
    {
        if (!$id) {
            return null;
        }
        $airport = $this->aeroportRepository->find((int)$id);
        if (!$airport) {
            throw new \Symfony\Component\Form\Exception\TransformationFailedException(
                'Airport not found in database'
            );
        }
        return $airport;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transport::class,
        ]);
    }
}




