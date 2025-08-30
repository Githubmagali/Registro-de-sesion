<?php

if (isset($_POST['darBaja'])) {
    $id = $_POST['darBaja'];
    $darDebaja = estudianteController::darDeBajaEstudianteController($id);

    if ($darDebaja) {
        header("Location: index.php?view=inicio&msg=ok");
        exit();
    } else {
        header("Location: index.php?view=inicio&msg=error");
        exit();
    }
}

if (isset($_POST['darAlta'])) {
    $id = $_POST['darAlta'];
    $darAlta = estudianteController::darDeAltaEstudianteController($id);

    if ($darAlta) {
        header("Location: index.php?view=estudiantesBaja&msg=ok");
        exit();
    } else {
        header("Location: index.php?view=estudiantesBaja&msg=error");
        exit();
    }
}



#print_r($_POST);