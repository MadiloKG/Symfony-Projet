<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController2 extends AbstractController
{
    public function index($prenom): Response
    {
  

        $html = $this->renderView('hello2.html.twig', [
            'prenom' => $prenom,
            
            'bien1' => ['id' => 234, 'ville' => 'Rennes', 'prix' => 500000],
            'bien2' => ['id' => 731, 'ville' => 'Cesson', 'prix' => 300000],
            'bien' => ['id' => 234, 'ville' => 'Rennes', 'prix' => 500000] // Ajout de la variable bien
        ]);
        
        return new Response($html);
    }
}
