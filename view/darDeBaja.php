<?php

$datosUsuario = new formularioController;


if (isset($_POST['estado']) == 1) {
    $darDebaja = $datosUsuario->darDeBajaController();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="flex justify-center items-center pt-20 bg-sky-100">
        <div class="bg-sky-100">
            <a href="index.php?view=editar">Editar</a>
            <a href="index.php?view=salir">Salir</a>
        </div>
    </div>
    <div class="flex justify-center items-center pt-20">
        Dar de baja
    </div>
    <form method="post">
        <input type="hidden" value="1" name="estado" />
        <button type="submit" class="border border-solid rounded-lg hover:bg-gray-50 px-5"> Dar de baja</button>
    </form>


</body>

</html>