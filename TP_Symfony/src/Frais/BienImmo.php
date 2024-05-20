<?php
namespace App\Frais;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response; // Assurez-vous d'importer la classe Response
use Cocur\Slugify\Slugify; // Assurez-vous d'importer la classe Slugify

class BienImmo {
    private $logger;
    private $calculatrice;

    public function __construct(LoggerInterface $logger, Calculatrice $c) {
        $this->logger = $logger;
        $this->calculatrice = $c;
    }

    public function affichePrix(string $num, string $description, int $prix, Slugify $slug)
    {
        $html = "bien $num de prix " . $this->calculatrice->calcul($prix) . " " . $slug->slugify($description);
        return new Response($html);
    }
}
