<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\BienRepository;
use App\Entity\Bien;

class AccueilController extends AbstractController
{
    // Dans votre contrôleur AccueilController
public function accueil(EntityManagerInterface $entityManager, BienRepository $bienRepository)
{
    // Créer un nouvel objet Bien
    $bien = new Bien();
    $bien->setTitre("Titre du bien");
    $bien->setPrix(50000); // Par exemple

    // Persiste l'objet Bien en base de données
    $entityManager->persist($bien);
    $entityManager->flush();

    // Vérifie si le bien existe dans la base de données
    $bienPersiste = $bienRepository->find($bien->getId());

    // Récupère le bien d'identifiant 2
    $bien = $bienRepository->find(2);

    // Modifier le code postal du bien s'il existe
    if ($bien) {
        $bien->setCp('35000');
        $entityManager->flush();
    }

    // Supprime le bien d'identifiant 2 s'il existe
    if ($bien) {
        $entityManager->remove($bien);
        $entityManager->flush();
    }

    // Rend la vue Twig avec les données
    return $this->render('home.html.twig', [
        'bienPersiste' => $bienPersiste,
    ]);
}

}
