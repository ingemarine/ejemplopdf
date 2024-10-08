<?php 
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\AppController;
use Controllers\ReporteController;
use Controllers\EmailController;
use Controllers\FTPController;


$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);

$router->get('/', [AppController::class,'index']);

//ruta
$router->get( '/pdf', [ReporteController::class,'pdf']);
//email
$router->get( '/email', [EmailController::class,'email']);
//ruta para conexion
$router->get( '/subir', [FTPController::class,'subir']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
