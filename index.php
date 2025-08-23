<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();

    // Tiempo de vida de la cookie de sesión en segundos (ej: 30 min)
    //ini_set('session.cookie_lifetime', 1800);

    // Tiempo máximo de inactividad permitido (gc = garbage collector)
    //ini_set('session.gc_maxlifetime', 1800);
    /*En este ejemplo, si el usuario pasa 30 minutos inactivo, la sesión puede expirar.
Peeeero ⚠️: esto depende de la recolección de basura de PHP (garbage collector),
 que no es exacta (no se ejecuta siempre al segundo 1800).
  Por eso muchos devs prefieren controlarlo manualmente.*/
}

require_once "controller/plantillaController.php";
require_once "controller/estudianteController.php";
require_once "controller/formularioController.php";
require_once "model/estudianteModel.php";
require_once "model/formularioModel.php";
require_once "model/conexion.php";





ini_set('display_errors', 0); //Indica si loe errores se muestran directamente en el nvegador 0; los oculta 1; los muestra
ini_set('upload_max_filesize', '100M'); //Define el tamaño max permitido para 
//subir un archivo indiv a traves de un formulario, osea hasta 100MB

ini_set('post_max_size', '101M'); //Define el tamaño max de todo el cuerpo de la
// peticion POST Si subir dos arch de 60 MB aunque upload_max_filesize lo permita exederia el post_max_size y falleria
ini_set('max_input_time', 300); //Tiempo mx en seg que PHP permite para recibir datos de entrada como POST, GET, archvos subidos
ini_set('max_execution_time', 300); //Tiempo max en seg que un script puede ejecutarse antes de ser terminado por el interprete

date_default_timezone_set('America/Argentina/Buenos_Aires');



define('DB_HOST', 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=WEB2020');
define('DB_USER', null);
define('DB_PASS', null);


$plantilla = new plantillaController();
$plantilla->ctrTraerPlantilla();


/*
session_start();

$tiempoDeVida = 1800; // 30 minutos

if (isset($_SESSION['ultimo_acceso'])) {
    if (time() - $_SESSION['ultimo_acceso'] > $tiempoDeVida) {
        // Si pasó más de 30 minutos → destruir sesión
        session_unset();
        session_destroy();
        header("Location: login.php?expirada=1");
        exit();
    }
}

// Actualizar último acceso
$_SESSION['ultimo_acceso'] = time();
*/