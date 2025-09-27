<?php
require_once "conexion.php";


class estudiantesModel
{

    //AGREGAR ESTUDIANTE 
    public static function  agregarEstudianteModel($tabla, $datos)
    { #El output hace que me devuelva directamente el id
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla(nombre, apellido, email, localidad, baja)
        OUTPUT INSERTED.id
        VALUES
    (:nombre, :apellido, :email, :localidad, :baja)");

        $stmt->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":apellido", $datos['apellido'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(":localidad", $datos['localidad'], PDO::PARAM_STR);
        $stmt->bindParam(":baja", $datos['baja'], PDO::PARAM_INT);

        if ($stmt->execute()) {
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            $proId = $resultado['id'];
            return $proId;
        } else {
            echo  "\nPDO::errorInfo():\n";
            print_r($stmt->errorInfo());
        }
        $stmt = null;
    }


    //ver estudiante

    public static function obtenerListaEstudiantesModel($tabla)
    {

        $stmt = conexion::conectar()->prepare("SELECT id, nombre, apellido, email, localidad, baja FROM $tabla
        WHERE baja = 1 OR baja = NULL");



        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            echo "\nPDO::errorInfo():\n";
            print_r($stmt->errorInfo());
        }
    }

    //ver estudiante por id 

    public static function obtenerIdEstudianteModel($tabla, $id)
    {


        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            echo "\nPDO::errorInfo():\n";
            print_r($stmt->errorInfo());
        }
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


        if ($stmt->execute()) {
            return 'ok';
        } else {
            return false;
        }
    }


    //verificar que no haya un estudiante reptido

    public static function verificarEstudianteModel($tabla, $nombre, $apellido)
    {
        try {
            $stmt = conexion::conectar()->prepare(" SELECT id FROM $tabla WHERE nombre = :nombre AND apellido = :apellido");

            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) //captura errores de la base de datos
        {
            error_log("Error en verificar el estudiante" . $e->getMessage());
        } catch (Exception $e) { //captura cualquier error
            error_log("Error gral en verificar estud " . $e->getMessage());
        }
    }




    //Ver estudiantes dados de baja 

    public static function estudiantesDadosDeBajaModel($tabla)
    {

        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla WHERE baja = 2");


        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }

    // dar de alta
    public static function darDeAltaEstudianteModel($tabla, $estado, $idUsuario)
    {
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla 
                                           SET baja = :estado 
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
