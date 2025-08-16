<?php

class conexion
{
    public static function conectar()
    {
        try {
            $link = new PDO(
                DB_HOST,
                DB_USER,
                DB_PASS,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
            return $link;
        } catch (PDOException $e) {
            die("Error de conexion: " . $e->getMessage());
        }
    }
}
