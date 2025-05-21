<?php

namespace App\Clases;

use App\Models\ParticipanteModel;
use Ramsey\Uuid\Uuid;

class Participante {
    private string $uuid;
    private string $email;
    private string $password;

    public function __construct(string $email, string $password, ?string $uuid = null) {
        $this->uuid = $uuid ?? Uuid::uuid4()->toString();
        $this->email = $email;
        $this->password = password_hash($password,PASSWORD_DEFAULT);
    }

    public function getUuid(): string {
        return $this->uuid;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setUuid(string $uuid): void
    {
        $this->uuid = $uuid;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
    public function save():Participante{
        ParticipanteModel::guardarParticipante($this);
        return $this;
    }
}

