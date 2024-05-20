<?php

namespace App\Frais;
use Psr\Log\LoggerInterface;

class Calculatrice
{
    protected $taux;

    public function __construct(float $taux)
    {
        $this->taux = $taux;
    }

    public function calcul(float $prix)
    {
        return $prix * $this->taux;
    }
}
