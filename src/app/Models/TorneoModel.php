<?php

namespace App\Models;

use App\Clases\Torneo;
use PDO;

class TorneoModel
{
    private static function conectarBD():?PDO{
        try{
           $conexion = new PDO("mysql:host=mariadboo;dbname=dbrepaso", "aaron", "aaron");
           $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           return $conexion;
        }catch(\PDOException $e){
            echo("Fallo en la conexión".$e->getMessage());
        }
        return null;
    }
    public static function borrarTorneo($id){
        $conexion = self::conectarBD();
        $sql = "DELETE FROM torneo WHERE id = :?";

        $sentenciaPreparada = $conexion->prepare($sql);
        $sentenciaPreparada->bindValue(":id", $id);
        $sentenciaPreparada->execute();
    }
    public static function editarTorneo(Torneo $torneo){
        $conexion = self::conectarBD();
        $sql = "UPDATE torneo SET nombre = :nombre, fechaini = :fechaini, fechafin = :fechafin where id = :id";

        $sentenciaPreparada = $conexion->prepare($sql);
        $sentenciaPreparada->bindValue(":nombre", $torneo -> getNombre());
        $sentenciaPreparada->bindValue(":fechaini", $torneo -> getFechaini());
        $sentenciaPreparada->bindValue(":fechafin", $torneo -> getFechafin());

        $sentenciaPreparada->execute();
    }
    public static function guardarTorneo(Torneo $torneo){
        $conexion = self::conectarBD();
        $sql = "INSERT INTO torneo (nombre, fechaini, fechafin) VALUES (:nombre, :fechaini, :fechafin)";

        $sentenciaPreparada = $conexion->prepare($sql);
        $sentenciaPreparada->bindValue(":id", $torneo ->getId());
        $sentenciaPreparada->bindValue(":nombre", $torneo ->getNombre());
        $sentenciaPreparada->bindValue(":fechaini", $torneo -> getFechaini());
        $sentenciaPreparada->bindValue(":fechafin", $torneo -> getFechafin());

        $sentenciaPreparada->execute();

    }
    public static function mostrarTorneo(int $id):?Torneo{
        $conexion = self::conectarBD();
        $sql = "SELECT id, fechaini, fechafin, nombre FROM torneo where id = :id";

        $sentenciaPreparada = $conexion->prepare($sql);
        $sentenciaPreparada->bindValue("id", $id);
        $sentenciaPreparada->execute();

        if($sentenciaPreparada->rowCount()===0){
            echo "Se ha producido un error";
            return null;
        }else{
            $datosTorneo = $sentenciaPreparada->fetch(PDO::FETCH_ASSOC);

            return $datosTorneo;
        }
    }
}