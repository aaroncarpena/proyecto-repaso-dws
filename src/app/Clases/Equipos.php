<?php

namespace App\Clases;
class Equipos
{
    private int $id;
    private array $integrantes = [];

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getIntegrantes(): array
    {
        return $this->integrantes;
    }

    public function setIntegrantes(array $integrantes): void
    {
        $this->integrantes = $integrantes;
    }
}