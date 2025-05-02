<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(): Response
    {
        $starShips = [
            new Starship(
                1,
                'USS Enterprise',
                'Aircraft Carrier',
                'James T. Kirk',
                'Active'
            ),
            new Starship(
                2,
                'HMS Defender',
                'Destroyer',
                'Sarah Thompson',
                'Under Maintenance'
            ),
            new Starship(
                3,
                'INS Vikrant',
                'Aircraft Carrier',
                'Rajesh Kumar',
                'Deployed'
            ),
        ];

        return $this->json($starShips);
        //        return new Response(json_encode($starShips));
    }
}
