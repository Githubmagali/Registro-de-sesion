<?php
if (!isset($_SESSION['validarIngreso'])) {
    echo '<script>window.location.href = "index.php?view=ingreso";</script>';
    return;
} else {
    if ($_SESSION['validarIngreso'] != 'ok') {
        echo '<script>window.location.href = "index.php?view=ingreso";</script>';
        return;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
    <div class="flex justify-center items-center pt-20 bg-sky-100">
        <div class="bg-sky-100">
            <a href="index.php?view=editar">Editar</a>
            <a href="index.php?view=salir">Salir</a>
        </div>
    </div>
    <div class="flex justify-center items-center pt-20">
        Estoy en inicio
    </div>

</body>

</html>