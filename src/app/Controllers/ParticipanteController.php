<?php

namespace App\Controllers;

use App\Clases\Participante;
use App\Models\ParticipanteModel;

Class ParticipanteController implements InterfaceController
{

    public function index()
    {
        include_once DIR_VISTAS . "/index-participante.php";
    }

    public function create()
    {
        include_once DIR_VISTAS."crear-participante.php";
    }

    public function store()
    {
        //var_dump($_POST);
        //Validación

        $participante = new Participante($_POST['email'], $_POST['password']);
        try{
            ParticipanteModel::guardarParticipante($participante);
        }catch(\Exception $e){
            echo "Ha habido un error al guardar el participante";
        }
        //$participante->save();

        $_SESSION['usuario']= $_POST['email'];
        header('Location: '.'/');
        // TODO: Implement store() method.
    }

    public function edit($id)
    {
        $participante = ParticipanteModel::buscarPorUuid($id);
        include_once DIR_VISTAS . "editar-participante.php";

        // TODO: Implement edit($sentenciaPreparada->bindValue("email", $correoElectronico);
    }

    public function update($id)
    {
        $participante = new Participante($_POST['email'], $_POST['password']);

        ParticipanteModel::editarUsuario($participante);
        header('Location: '. '/');    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function destroy($id)
    {
        ParticipanteModel::borrarUsuario($id);
        include_once DIR_VISTAS.'borrar-participante';
    }


    public function login(){
        $participante = ParticipanteModel::buscarPorEmail($_POST['email']);

        if(password_verify($_POST['password'],$participante['password'])){
            $_SESSION['usuario'] = $participante['email'];
            $_SESSION['uuid'] = $participante['uuid'];

        }

    }
    public function logout(){
        if (isset($_SESSION['usuario'])){
            session_destroy();
            header('Location: '.'/');
        }
    }

}