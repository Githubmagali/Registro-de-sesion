<?php
ini_set('display_errors', 0); //Indica si loe errores se muestran
//directamente en el nvegador 0; los oculta 1; los muestra
ini_set('upload_max_filesize', '100M'); //Define el tamaño max permitido para 
//subir un archivo indiv a traves de un formulario, osea hasta 100MB

ini_set('post_max_size', '101M'); //Define el tamaño max de todo el cuerpo de la
// peticion POST Si subir dos arch de 60 MB aunque upload_max_filesize lo permita
// exederia el post_max_size y falleria
ini_set('max_input_time', 300); //Tiempo mx en seg que PHP
// permite para recibir datos de entrada como POST, GET, archvos subidos
ini_set('max_execution_time', 300); //Tiempo max en seg que 
//un script puede ejecutarse antes de ser terminado por el interprete


//in_array()sirve para verificar si un valor existe dentro de un array


$routes = [
    "registro"           => "view/registro.php",
    "ingreso"            => "view/ingreso.php",
    "inicio"             => "view/inicio.php",
    "salir"              => "view/salir.php",
    "editar"             => "view/editar.php",
    "editarEstudiante"   => "view/editarEstudiante.php",
    "agregarEstudiante"  => "view/agregarEstudiante.php",
    "estudiantesBaja"    => "view/estudiantesBaja.php",

    // rutas admin
    "inicioAdmin"        => "view/admin/inicioAdmin.php",
];
$defaultRoute = "view/registro.php";

if (isset($_GET['view'])) {
    $view = basename($_GET['view']);

    if (array_key_exists($view, $routes)) {
        include $routes[$view];
    } else {
        include "view/error404.php";
    }
} else {
    include $defaultRoute;
}


// Tiempo de vida de la cookie de ses en segundos (ej: 30 min)
ini_set('session.cookie_lifetime', 1800);

// Tiempo ma de inactividad permitido (gc = garbage collector)
ini_set('session.gc_maxlifetime', 1800);
/*En este ejemplo, si el usuario pasa 30 min inactivo, la sesion puede expirar.
Peeeero: esto depende de la recoleccion de basura de PHP (garbage collector),
 que no es exacta (no se ejecuta siempre al segundo 1800).
  Por eso muchos prefieren controlarlo manualmente.*/

session_start();

$tiempoDeVida = 1800; // 30 minutos

// Actualizar último acceso
$_SESSION['ultimo_acceso'] = time();


if (isset($_SESSION['ultimo_acceso'])) {
    if (time() - $_SESSION['ultimo_acceso'] > $tiempoDeVida) {
        // Si paso + de 30 min  destruir sesion
        session_unset();
        session_destroy();
        header("Location: login.php?expirada=1");
        exit();
    }
}
