<?php
require_once "conexion.php";

class formularioModel
{

    //Registro

    public static function formularioModel($tabla, $datos)
    {

        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla(nombreCompleto, email, password, fechaIngreso)VALUES
    (:nombreCompleto, :email, :password, :fechaIngreso)");

        $stmt->bindParam(":nombreCompleto", $datos['nombreCompleto'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos['password'], PDO::PARAM_STR);
        $stmt->bindParam(":fechaIngreso", $datos['fechaIngreso'], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Consulta mail 

    public static function verificarMail($tabla, $email)
    {
        $stmt = conexion::conectar()->prepare("SELECT id FROM $tabla WHERE email = :email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Ingreso

    public static function ingresoModel($tabla, $item, $valor)
    {

        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");
        $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    //Intentos fallidos

    public static function intentosFallidos($tabla, $valor, $id)
    {
        $stmt = conexion::conectar()->prepare("UPDATE $tabla SET intentosFallidos = :intentosFallidos WHERE id = :id");

        $stmt->bindParam("intentosFallidos", $valor, PDO::PARAM_INT);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            print_r(conexion::conectar()->errorInfo());
        }
    }


    //Obtener usuario

    public static function obtenerUsuarioModel($id, $tabla)
    {

        $stmt = conexion::conectar()->prepare("SELECT id, nombreCompleto, email, password, telefono, provincia, calle, altura
        FROM $tabla WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Editar datos 

    public static function editarUsuarioModel($datos, $tabla)
    {

        $stmt = conexion::conectar()->prepare(
            "UPDATE $tabla
            SET nombreCompleto = :nombreCompleto,
                email = :email,
                telefono = :telefono,
                password = :password,
                provincia = :provincia,
                calle = :calle,
                altura = :altura
            where id = :id"
        );

        $stmt->bindParam(":nombreCompleto", $datos['nombreCompleto'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos['telefono'], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos['password'], PDO::PARAM_STR);
        $stmt->bindParam(":provincia", $datos['provincia'], PDO::PARAM_STR);
        $stmt->bindParam(":calle", $datos['calle'], PDO::PARAM_STR);
        $stmt->bindParam(":altura", $datos['altura'], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos['id'], PDO::PARAM_INT);

        return $stmt->execute();
    }


    // dar de baja 
    public static function darDeBajaModel($tabla, $estado, $idUsuario)
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


    //Volver a dar de alta

    public static function volverAltaModel($tabla, $estado, $id)
    {
        $stmt = conexion::conectar()->prepare("UPDATE $tabla SET darDeBaja = :darDeBaja WHERE id = :id");

        $stmt->bindParam(":darDeBaja", $estado, PDO::PARAM_INT);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
