<?php


class estudianteController
{


    //Registrar estudiante
    static public function  agregarEstudianteController()
    {

        if (isset($_POST['registrarEstudiante'])) {

            $tabla = 'Estudiantes';
            $nombre = $_POST['agregarNombreE'];
            $apellido = $_POST['agregarApellidoE'];

            $existeEstudiante = estudiantesModel::verificarEstudianteModel($tabla, $nombre, $apellido);


            if ($existeEstudiante) {
                echo "<script>alert ('El estudiante ya esta registrado');</script>";
                return false;
            }

            $datos = array(
                'nombre' => $_POST['agregarNombreE'],
                'apellido' => $_POST['agregarApellidoE'],
                'email' => $_POST['agregarEmailE'],
                'localidad' => $_POST['agregarLocalidadE']

            );

            $respuesta = estudiantesModel::agregarEstudianteModel($tabla, $datos);

            if ($respuesta == true) {
                echo "<script>alert('Registro exitoso')
                window.location.href = 'index.php?view=inicio'; ;</script>";
                return true;
            } elseif ($respuesta == false) {
                echo "<script>alert('El estudiante ya esta registrado')</script>";
                return false;
            } else {
                echo "<script>alert('Hubo un error')</script>";
                return false;
            }
        }
    }

    //Ver estudiantes

    public static function obtenerListaEstudiantesController()
    {
        $tabla = 'Estudiantes';

        return estudiantesModel::obtenerListaEstudiantesModel($tabla);
    }


    //Ver estudiante por ID

    public static function obtenerIdEstudianteController($id)
    {

        $tabla = 'Estudiantes';

        return estudiantesModel::obtenerIdEstudianteModel($tabla, $id);
    }

    //Editar estudiante

    public function editarEstudianteController($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $tabla = 'Estudiantes';

            $datos = [
                'id' => $id,
                'nombre' => $_POST['editarNombreE'],
                'apellido' => $_POST['editarApellidoE'],
                'email' => $_POST['editarEmailE'],
                'localidad' => $_POST['editarLocalidadE']
            ];

            return estudiantesModel::editarEstudianteController($tabla, $datos);
        }
    }
    //Dar de baja a un estudiante
    public static function darDeBajaEstudianteController($id)
    {

        $tabla = 'Estudiantes';
        $estado = 2;
        $idUsuario = $id;


        return formularioModel::darDeBajaModel($tabla, $estado, $idUsuario);
    }

    //Estudiantes dados de baja 

    public static function estudiantesDadosDeBajaController()
    {

        $tabla = 'Estudiantes';

        return estudiantesModel::estudiantesDadosDeBajaModel($tabla);
    }



    //Dar de alta a un estudiante
    public static function darDeAltaEstudianteController($id)
    {

        $tabla = 'Estudiantes';
        $estado = 1;
        $idUsuario = $id;

        $respuesta = estudiantesModel::darDeAltaEstudianteModel($tabla, $estado, $idUsuario);

        if ($respuesta == 'ok') {
            echo "<script>alert('Estudiante dado de baja correctamente')
             window.location.href = 'index.php?view=inicio';</script>";
        } else {
            echo "<script>alert('Hubo un error al dar de baja al usuario');</script>";
        }
    }
}
