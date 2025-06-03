<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactFormType::class, $contact);

        $form->handleRequest($request); // Traite les données du formulaire soumis

        if ($form->isSubmitted() && $form->isValid()) {
            // Si le formulaire est valide, persistez l'entité Contact
            $entityManager->persist($contact);
            $entityManager->flush();

            // Ajoute un message de succès (flash message)
            $this->addFlash(
                'success',
                'Votre message a été envoyé avec succès ! Nous vous recontacterons bientôt.'
            );

            // Redirige pour éviter la soumission multiple du formulaire
            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView(), // Passe le formulaire au template
        ]);
    }
}