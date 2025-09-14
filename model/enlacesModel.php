<?php
class enlacesModel
{
    public static function enlacesModel($enlace)
    {
        $ruta = "view/error404.php";


        if (TIPO_USUARIO === 'guest') {
            switch ($enlace) {
                case "ingreso":
                    $ruta = "view/ingreso.php";
                    break;
                case "registro":
                    $ruta = "view/registro.php";
                    break;
                default:
                    $ruta = "view/ingreso.php";
                    break;
            }
            return $ruta;
        }


        if (TIPO_USUARIO === 'usuario') {
            switch ($enlace) {

                case "inicio":
                    $ruta = "view/inicio.php";
                    break;
                case "editar":
                    $ruta = "view/editar.php";
                    break;
                case "post_inicio":
                    $ruta = "view/post_inicio.php";
                    break;
                case "agregarEstudiante":
                    $ruta = "view/agregarEstudiante.php";
                    break;
                case "estudiantesBaja":
                    $ruta = "view/estudiantesBaja.php";
                    break;
                case "pruebaDeTabla":
                    $ruta = "view/pruebaDeTabla.php";
                    break;
                case "salir":
                    $ruta = "view/salir.php";
                    break;
                default:
                    $ruta = "view/error404.php";
                    break;
            }
        }

        if (TIPO_USUARIO === 'admin') {
            switch ($enlace) {
                case "inicio":
                    $ruta = "view/" . DIRECTORIO . "/inicioAdmin.php";
                    break;
                case "post_bajaUsu":
                    $ruta = "view/" . DIRECTORIO . "/post_bajaUsu.php";
                    break;
                case "bajaUsuarios":
                    $ruta = "view/" . DIRECTORIO . "/bajaUsuarios.php";
                    break;
                case "pruebaDeTabla":
                    $ruta = "view/" . DIRECTORIO . "/pruebaDeTabla.php";
                    break;
                case "salir":
                    $ruta = "view/salir.php";
                    break;
                default:
                    $ruta = "view/error404.php";
                    break;
            }
        }

        return $ruta;
    }
}