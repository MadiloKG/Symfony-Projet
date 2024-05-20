<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;

class HelloController extends AbstractController
{
    public function hello($prenom = "World", Environment $twig): Response
    {
        // Simulation d'une température
        $temperature = 18;

        // Définition du numéro de département
        $departement = 35;

        $html = $twig->render('hello.html.twig', [
            'prenom' => $prenom,
            'temperature' => $temperature,
            'departement' => $departement, 
            'pays' => ['FR', 'US'],
            'bien' => ['id' => 234, 'ville' => 'Rennes', 'prix' => 500000],
        ]);

        return new Response($html);
    }
}
