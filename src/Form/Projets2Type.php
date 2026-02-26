<?php

namespace App\Form;

use App\Entity\Projets;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class Projets2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('dateDebut', DateType::class, [
                'label' => 'Date de début de projet',
                'format' => 'dd-MM-yyyy',
                'html5' => false,
                'years' => range(1900,2021)
            ])
            ->add('dateFin', DateType::class, [
                'label' => 'Date de fin de projet',
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'html5' => false,
                'required' => false
            ])
            ->add('etat')
            ->add('client')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Projets::class,
        ]);
    }
}
