<?php

declare(strict_types=1);

namespace App\Model;

class Starship
{
    public function __construct(
        private int $id,
        private string $class,
        private string $name,
        private string $captain,
        private StarshipStatusEnum $status,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCaptain(): string
    {
        return $this->captain;
    }

    public function getStatus(): StarshipStatusEnum
    {
        return $this->status;
    }
}
