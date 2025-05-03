<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }

    public function findAll(): array
    {
        $this->logger->info('Starship collection retrieved');

        return [
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
    }

    public function find(int $id): ?Starship
    {
        foreach ($this->findAll() as $starship) {
            if ($starship->getId() === $id) {
                return $starship;
            }
        }

        return null;
    }
}
