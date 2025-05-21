<?php

namespace App\Clases;
class Pista
{
    private int $id;
    private array $equipos = [];
    private int $id_partido;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getEquipos(): array
    {
        return $this->equipos;
    }

    public function setEquipos(array $equipos): void
    {
        $this->equipos = $equipos;
    }

    public function getIdPartido(): int
    {
        return $this->id_partido;
    }

    public function setIdPartido(int $id_partido): void
    {
        $this->id_partido = $id_partido;
    }



}