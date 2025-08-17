<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');
require_once "controller/plantillaController.php";
require_once "controller/estudianteController.php";
require_once "controller/formularioController.php";
require_once "model/estudianteModel.php";
require_once "model/formularioModel.php";
require_once "model/conexion.php";



define('DB_HOST', 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=WEB2020');
define('DB_USER', null);
define('DB_PASS', null);


$plantilla = new plantillaController();
$plantilla->ctrTraerPlantilla();
