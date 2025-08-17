<?php
require_once "conexion.php";


class estudiantesModel
{

    //AGREGAR ESTUDIANTE 
    public static function  agregarEstudianteModel($tabla, $datos)
    {
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla(nombre, apellido, email, localidad)VALUES
    (:nombre, :apellido, :email, :localidad)");

        $stmt->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":apellido", $datos['apellido'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(":localidad", $datos['localidad'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }


    //ver estudiante

    public static function obtenerListaEstudiantesModel($tabla)
    {

        $stmt = conexion::conectar()->prepare("SELECT id, nombre, apellido, email, localidad, baja FROM $tabla");


        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //ver estudiante por id 

    public static function obtenerIdEstudianteModel($tabla, $id)
    {


        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    //Editar datos del estudiante

    public static function editarEstudianteController($tabla, $datos)
    {

        $stmt = conexion::conectar()->prepare(
            "UPDATE $tabla
            SET nombre = :nombre,
            apellido = :apellido,
            email = :email,
            localidad = :localidad
            WHERE id = :id"
        );

        $stmt->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":apellido", $datos['apellido'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(":localidad", $datos['localidad'], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos['id'], PDO::PARAM_INT);

        return $stmt->execute();
    }


    //verificar que no haya un estudiante reptido

    public static function verificarEstudianteModel($tabla, $nombre, $apellido)
    {
        $stmt = conexion::conectar()->prepare(" SELECT id FROM $tabla WHERE nombre = :nombre AND apellido = :apellido");

        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // dar de baja 
    public static function darDeBajaEstudianteModel($tabla, $estado, $idUsuario)
    {
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla 
                                           SET darDeBaja = :estado 
                                           WHERE id = :id");

        $stmt->bindParam(":estado", $estado, PDO::PARAM_INT);
        $stmt->bindParam(":id", $idUsuario, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }
}
