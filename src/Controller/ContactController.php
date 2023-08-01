<?php

namespace App\Controller;

use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function contactForm(Request $request): Response
    {
        $contact = new Contact();

        $form = $this->createForm(ContactFormType::class, $contact);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->contactMailer->sendContactEmail(
                $contact->getName(),
                $contact->getEmail(),
                $contact->getSubject(),
                $contact->getMessage(),
            );

            return $this->redirectToRoute('contact_confirmation');
        }

    

        return $this->render('contact/contact_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/contact/confirmation', name: 'contact_confirmation')]
    public function contactConfirmation():Response
    {
        return $this->render('contact/contact_confirmation.html.twig');
    }
}
