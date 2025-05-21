<?php

namespace App\Clases;
class Torneo
{
    private int $id;
    private \DateTime $fechaini;
    private \DateTime $fechafin;

    private string $nombre;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFechaini(): DateTime
    {
        return $this->fechaini;
    }

    public function setFechaini(DateTime $fechaini): void
    {
        $this->fechaini = $fechaini;
    }

    public function getFechafin(): DateTime
    {
        return $this->fechafin;
    }

    public function setFechafin(DateTime $fechafin): void
    {
        $this->fechafin = $fechafin;
    }

    public function obtenerParticipantes()
    {

    }

    public function obtenerPistaPartido()
    {

    }

    public function save()
    {

    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

}