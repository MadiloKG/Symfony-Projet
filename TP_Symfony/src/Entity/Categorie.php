<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Terrain_agricole = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Prairie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Bois = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Bâtiments = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Exploitations = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTerrainAgricole(): ?string
    {
        return $this->Terrain_agricole;
    }

    public function setTerrainAgricole(?string $Terrain_agricole): static
    {
        $this->Terrain_agricole = $Terrain_agricole;

        return $this;
    }

    public function getPrairie(): ?string
    {
        return $this->Prairie;
    }

    public function setPrairie(?string $Prairie): static
    {
        $this->Prairie = $Prairie;

        return $this;
    }

    public function getBois(): ?string
    {
        return $this->Bois;
    }

    public function setBois(?string $Bois): static
    {
        $this->Bois = $Bois;

        return $this;
    }

    public function getBâtiments(): ?string
    {
        return $this->Bâtiments;
    }

    public function setBâtiments(?string $Bâtiments): static
    {
        $this->Bâtiments = $Bâtiments;

        return $this;
    }

    public function getExploitations(): ?string
    {
        return $this->Exploitations;
    }

    public function setExploitations(?string $Exploitations): static
    {
        $this->Exploitations = $Exploitations;

        return $this;
    }
}
