<?php
include "vendor/autoload.php";
include "env.php";

use App\Controllers\TorneoController;
use Phroute\Phroute\RouteCollector;
use GuzzleHttp\Client;
use App\Controllers\ParticipanteController;

session_start();
$router = new RouteCollector();

$router->get('/', function (){
    include_once DIR_VISTAS."landing.php";
});
$router->get('/participante/registro', [ParticipanteController::class, 'create']);
$router->get('/participante', [ParticipanteController::class, 'index']);
$router->get('/torneo', [TorneoController::class, 'index']);
$router->get('/torneo/creacion', [TorneoController::class, 'create']);
$router->post('/participante', [ParticipanteController::class, 'store']);
$router->post('/torneo', [TorneoController::class, 'store']);
$router->put('/participante/{id}',[ParticipanteController::class,'update']);
$router->post('/modificar-torneo', [TorneoController::class, 'update']);
$router->delete('/participante/{id}', [ParticipanteController::class, 'destroy']);
$router->delete('/torneo/{id}', [TorneoController::class, 'destroy']);
$router->get('/participante/logout', [ParticipanteController::class, 'logout']);

$router->get('/borrar-participante', function (){
    $client = new \GuzzleHttp\Client();
    $email = $_GET["email"];
    $response = $client->request('DELETE', '/participante/'.$email);
});

$router->post('/modificar-participante', function(){
    $uuid_participante = $_POST['uuid'];
    $cliente = new Client();
    $response = $cliente->request('PUT', '/participante/'.$uuid_participante);
});
$router->get('/borrar-torneo', function(){
    $cliente = new Client();
    $nombre = $_GET["nombre"];
    $response = $cliente->request('DELETE', '/torneo/'.$nombre);
});


$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Print out the value returned from the dispatched function
echo $response;