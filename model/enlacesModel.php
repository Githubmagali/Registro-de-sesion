<?php

//in_array()sirve para verificar si un valor existe dentro de un array

class enlacesModel
{

    public static function enlacesModel($enlace)
    {
        $ruta = "";

        switch ($enlace) {
            case "registro":
                $ruta = "view/registro.php";
                break;
            case "ingreso":
                $ruta = "view/ingreso.php";
                break;
            case "registro":
                $ruta = "view/registro.php";
                break;
            case "inicio":
                $ruta = "view/inicio.php";
                break;
            case "salir":
                $ruta = "view/salir.php";
                break;
            case "editar":
                $ruta = "view/editar.php";
                break;
            case "editarEstudiante":
                $ruta = "view/editarEstudiante.php";
                break;
            case "agregarEstudiante":
                $ruta = "view/agregarEstudiante.php";
                break;
            case "estudiantesBaja":
                $ruta = "view/estudiantesBaja.php";
                break;
            default:
                include "view/error404.php";
                break;
        }
        return $ruta;
    }
}
