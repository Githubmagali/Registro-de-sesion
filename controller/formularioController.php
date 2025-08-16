<?php

class formularioController
{

    //registro

    static public function registroController()
    {
        if (isset($_POST['registroNombre'])) {

            $tabla = 'Registros';

            $existe = formularioModel::verificarMail($tabla, $_POST['registroEmail']);

            if ($existe) {
                echo "<script>alert ('El correo ya esta registrado');</script>";
                return false;
            }

            $password = $_POST['registroPassword'];
            $repetirPassword = $_POST['repetirPassword'];

            if ($password != $repetirPassword) {
                echo "<script>alert('Las contraseñas no coindinen')</script>";
                return; //detiene la ejecucion
            }

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);


            $datos = array(
                'nombreCompleto' => $_POST['registroNombre'],
                'email' => $_POST['registroEmail'],
                'password' => $passwordHash,
                'fechaIngreso' => date('Y-m-d\TH:i:s')
            );

            $respuesta = formularioModel::formularioModel($tabla, $datos);

            if ($respuesta == true) {

                echo "<script>alert('Registro exitoso');</script>";
                return true;
            } elseif ($respuesta == false) {
                echo "<script>alert('El correo ya esta registrado')</script>";
                return false;
            } else {
                echo "<script>alert('Error al registrar');</script>";
                return false;
            }
        }
    }

    //Ingreso

    public static function ingresoController()
    {
        if (isset($_POST['ingresoEmail'])) {

            $tabla = 'Registros';
            $item = 'email';
            $valor = $_POST['ingresoEmail'];

            $respuesta = formularioModel::ingresoModel($tabla, $item, $valor);

            if (!$respuesta) {
                echo "<script>alert('El correo no está registrado');</script>";
                return;
            }


            if (password_verify($_POST['ingresoPassword'], $respuesta['password'])) {

                $_SESSION['validarIngreso'] = 'ok';
                $_SESSION['usuarioId'] = $respuesta['id'];
                $_SESSION['usuarioNombre'] = $respuesta['nombreCompleto'];

                echo "<script>alert('Ingreso exitoso');
                      window.location.href = 'index.php?view=inicio'; </script> ";
            } else {
                echo "<script>alert('Contraseña incorrecta');</script>";

                $intentos = $respuesta['intentosFallidos'] + 1;

                formularioModel::intentosFallidos($tabla, $intentos, $respuesta['id']);
            }
        }
    }

    //Ver los datos del usuario

    public static function obtenerUsuarioController()
    {
        $idUsuario = $_SESSION['usuarioId'];
        $tabla = 'Registros';
        return formularioModel::obtenerUsuarioModel($idUsuario, $tabla);
    }

    //Editar usuario 

    public function editarUsuarioController()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $password = $_POST['editarPassword'];
            $repetirPassword = $_POST['repetirPassword'];

            if ($password !== $repetirPassword) {
                echo "<script>alert('Las contraseñas no coinciden.');</script>";
                return;
            }

            $nuevoHash = password_hash($password, PASSWORD_DEFAULT);


            $tabla = 'Registros';
            $datos = [
                'id' => $_SESSION['usuarioId'],
                'nombreCompleto' => $_POST['editarNombre'],
                'email' => $_POST['editarEmail'],
                'password' => $nuevoHash,
                'telefono' => $_POST['editarTelefono'],
                'provincia' => $_POST['editarProvincia'],
                'calle' => $_POST['editarCalle'],
                'altura' => $_POST['editarAltura']
            ];

            $datosUsuario = formularioModel::editarUsuarioModel($datos, $tabla);

            if ($datosUsuario) {
                echo  "<script>alert('Registro exitoso');
                 window.location.href = 'index.php?view=inicio';</script>";
            } else {
                echo  "<script>alert('Hubo un error!');</script>";
            }
        }
    }
}
