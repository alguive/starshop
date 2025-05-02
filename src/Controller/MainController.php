<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $starshipCount = 457;
        $myShip = [
            'name' => 'USS LeafyCruisser (NCC-001)',
            'class' => 'Garden',
            'captain' => 'Jean-Luck Pickles',
            'status' => 'Under Construction',
        ];

        return $this->render('main/homepage.html.twig', [
            'myShip' => $myShip,
            'numberOfStarship' => $starshipCount,
        ]);
    }
}
