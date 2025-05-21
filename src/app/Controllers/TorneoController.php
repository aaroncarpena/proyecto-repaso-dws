<?php

namespace App\Controllers;

use App\Controllers\InterfaceController;
use App\Models\TorneoModel;

class TorneoController implements InterfaceController
{

    public function index()
    {
        include_once DIR_VISTAS."./index-torneo.php";
    }

    public function create()
    {
        include_once DIR_VISTAS."crear-torneo.php";
    }

    public function store()
    {
        var_dump($_POST);
    }

    public function edit($id)
    {
        $torneo=TorneoModel::mostrarTorneo($id);
        include_once DIR_VISTAS."editar-torneo.php";

    }

    public function update($id)
    {
        // TODO: Implement update() method.
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function destroy($id)
    {
        TorneoModel::borrarTorneo($id);
    }
}