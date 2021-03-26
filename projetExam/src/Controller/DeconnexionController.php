<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeconnexionController extends AbstractController
{
    #[Route('/deconnexion', name: 'deconnexion')]
    public function deconnexion(): Response
    {
        return $this->render('deconnexion/deconnexion.html.twig', [
            'controller_name' => 'DeconnexionController',
        ]);
    }
}
