<?php

namespace App\Form;

use App\Entity\Declarants;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DeclarantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('CIN_ou_num_passeport', TextType::class, [
                'label' => 'CIN OU NUMERO DE PASSEPORT',
            ])
            ->add('Nom_complet')
            ->add('type_declaration', ChoiceType::class, [
                'label' => 'Type de declaration',
                'choices' => [
                    'OBJET PERDU' => 'OBJET PERDU',
                    'PERSONNE PERDUE' => 'PERSONNE PERDUE',
                ],
                'expanded' => true,
            ])
            ->add('Ville_actuelle')
            ->add('Num_telephone')
            ->add('Adresse')
            ->add('suivant',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Declarants::class,
        ]);
    }
}
