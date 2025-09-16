<?php
session_start();


require_once "controller/plantillaController.php";
require_once "controller/estudianteController.php";
require_once "controller/formularioController.php";
require_once "controller/enlacesController.php";
require_once "model/estudianteModel.php";
require_once "model/formularioModel.php";
require_once "model/enlacesModel.php";
require_once "model/conexion.php";

ini_set('display_errors', 1);


ini_set('display_errors', 1);
ini_set('upload_max_filesize', '100M');
ini_set('post_max_size', '101M');
ini_set('max_input_time', 300);
ini_set('max_execution_time', 300);

date_default_timezone_set('America/Argentina/Buenos_Aires');



define('DB_HOST', 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=WEB2020');
define('DB_USER', null);
define('DB_PASS', null);


$arrAdm = ['mavali3@mail.com'];

if (isset($_SESSION['validar'])) {
    if (in_array($_SESSION['validar'], $arrAdm)) {
        define('TIPO_USUARIO', 'admin');
        define('DIRECTORIO', 'admin');
    } else {
        define('TIPO_USUARIO', 'usuario');
        define('DIRECTORIO', '');
    }
} else {
    define('TIPO_USUARIO', 'guest');
    define('DIRECTORIO', '');
}

$plantilla = new plantillaController();
$plantilla->ctrTraerPlantilla();


echo "<pre>";
print_r($_SESSION);
echo "</pre>";
