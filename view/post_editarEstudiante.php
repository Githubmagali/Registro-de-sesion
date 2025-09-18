<?php

$datosEstudiante = new estudianteController();

if (isset($_POST['enviaFormularioE']) && $_POST['enviaFormularioE'] == 1) {

    $id = base64_decode($_POST['id']);

    $editarEstudiante = $datosEstudiante->editarEstudianteController($id);

    if ($editarEstudiante) {
        header("Location: index.php?view=inicio&msgEditar=ok");
        exit();
    } else {
        header("Location: index.php?view=inicio&msgEditar=error");
        exit();
    }
}
