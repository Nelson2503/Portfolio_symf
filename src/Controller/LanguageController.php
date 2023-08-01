<?php

namespace App\Controller;

use App\Repository\CompetenceTechRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LanguageController extends AbstractController
{
    #[Route('/language', name: 'language')]
    public function index(CompetenceTechRepository $languages): Response
    {
        $language = $languages->findAll();
        return $this->render('language/index.html.twig', [
            'controller_name' => 'LanguageController',
            'languages' => $language
        ]);
    }
}
