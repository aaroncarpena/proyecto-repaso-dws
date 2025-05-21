<?php

namespace App\Models;
use App\Clases\Participante;
use PDO;
use PDOException;
use Ramsey\Uuid\Uuid;

class ParticipanteModel
{
    private static function conectarBD():?PDO{
        try{
            $conexion = new PDO("mysql:host=mariadboo;dbname=dbrepaso", "aaron", "aaron"
                );

            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }catch(PDOException $e){
            echo "Fallo de conexión".$e->getMessage();
        }
        return null;
    }
    public static function borrarUsuario($correoElectronico){
        $conexion = self::conectarBD();

        $sql = "DELETE FROM participante WHERE email = :email";
        $sentenciaPreparada = $conexion->prepare($sql);
        $sentenciaPreparada->bindValue("email", $correoElectronico);
        $sentenciaPreparada->execute();
    }
    public static function editarUsuario(Participante $participante){
        $conexion = self::conectarBD();
        $sql = "UPDATE participante SET email =:email, password =:password where uuid = :uuid";

        $sentenciaPreparada = $conexion->prepare($sql);
        $sentenciaPreparada->bindValue(":email", $participante -> getEmail());
        $sentenciaPreparada->bindValue(":password", $participante->getPassword());
        $sentenciaPreparada->execute();
    }
    public static function guardarParticipante(Participante $participante){
        $conexion = self::conectarBD();
        $sql = "INSERT INTO participante (uuid, email, password) VALUES (:uuid, :email, :password)";

        $sentenciaPreparada = $conexion->prepare($sql);
        $sentenciaPreparada->bindValue("uuid", $participante -> getUuid());
        $sentenciaPreparada->bindValue("email", $participante -> getEmail());
        $sentenciaPreparada->bindValue("password", $participante -> getPassword());

        $sentenciaPreparada->execute();

    }

    public static function mostrarParticipante(Uuid $uuid):?Participante{
    $conexion = self::conectarBD();
    $sql = "SELECT uuid, email, password FROM participante where uuid = :uuid";

    $sentenciaPreparada = $conexion->prepare($sql);
    $sentenciaPreparada->bindValue("uuid", $uuid);
    $sentenciaPreparada->execute();

    if($sentenciaPreparada->rowCount()===0){
        echo "Se ha producido un error";
        return null;
    }else{
        $datosParticpante = $sentenciaPreparada->fetch(PDO::FETCH_ASSOC);

        return $datosParticpante;
    }

    }
    public static function buscarPorEmail(string $email): ?array {
        $conexion = self::conectarBD();

        $sql = "SELECT * FROM participante WHERE email = :email";
        $sentencia = $conexion->prepare($sql);
        $sentencia->bindValue(':email', $email);
        $sentencia->execute();

        if ($sentencia->rowCount() === 0) {
            return null;
        }

        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }
    public static function buscarPorUuid(Uuid $uuid): ?array {
        $conexion = self::conectarBD();

        $sql = "SELECT * FROM participante WHERE uuid = :uuid";
        $sentencia = $conexion->prepare($sql);
        $sentencia->bindValue(':uuid', $uuid);
        $sentencia->execute();

        if($sentencia->rowCount() === 0) {
            return null;
        }
        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }


}