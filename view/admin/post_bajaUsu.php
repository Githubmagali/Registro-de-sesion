<?php

if (isset($_POST['darBaja'])) {

    $id = $_POST['darBaja'];
    $estado = 2;

    $formulario = new formularioController();

    $respuesta = $formulario->darBajaUsuarioIdController($id, $estado);

    if ($respuesta === "ok") {
        header("Location: index.php?view=inicio&msg=ok");
        exit();
    } else {
        header("Location: index.php?view=inicio&msg=error");
        exit();
    }
}
