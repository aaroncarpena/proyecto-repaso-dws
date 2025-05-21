<?php

namespace App\Clases;
class Partidos
{
    private int $id;
    private DateTime $horaInicio;
    private DateTime $horaFin;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getHoraInicio(): DateTime
    {
        return $this->horaInicio;
    }

    public function setHoraInicio(DateTime $horaInicio): void
    {
        $this->horaInicio = $horaInicio;
    }

    public function getHoraFin(): DateTime
    {
        return $this->horaFin;
    }

    public function setHoraFin(DateTime $horaFin): void
    {
        $this->horaFin = $horaFin;
    }
}