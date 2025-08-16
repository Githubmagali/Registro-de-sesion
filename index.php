<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');
require_once "controller/formularioController.php";
require_once "model/conexion.php";
require_once "model/formularioModel.php";
require_once "controller/plantillaController.php";

define('DB_HOST', 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=WEB2020');
define('DB_USER', null);
define('DB_PASS', null);


$plantilla = new plantillaController();
$plantilla->ctrTraerPlantilla();
