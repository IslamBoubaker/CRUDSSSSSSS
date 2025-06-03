<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType    

{
       
         public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastName', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Votre Nom', 'class' => 'form-control']
            ])
            ->add('firstName', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['placeholder' => 'Votre Prénom', 'class' => 'form-control']
            ])
            ->add('phoneNumber', TelType::class, [
                'label' => 'Numéro de Téléphone',
                'attr' => ['placeholder' => 'Ex: 06 12 34 56 78', 'class' => 'form-control'],
                'required' => false,
            ])
            ->add('projectType', TextType::class, [
                'label' => 'Type de chantier',
                'attr' => ['placeholder' => 'Ex: Rénovation façade, Construction mur...', 'class' => 'form-control']
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Votre Message',
                'attr' => ['placeholder' => 'Décrivez votre projet ici...', 'rows' => 6, 'class' => 'form-control']
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer le message',
                'attr' => ['class' => 'btn btn-primary btn-lg mt-4']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
