<?php

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
