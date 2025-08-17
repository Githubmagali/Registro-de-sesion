<?php

$datosEstudiante = new estudianteController;
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$estudiante = $datosEstudiante::obtenerIdEstudianteController($id);


if (isset($_POST['enviaFormularioE']) && $_POST['enviaFormularioE'] == 1) {

    $editarEstudiante = $datosEstudiante->editarEstudianteController($id);
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
    <div class="flex justify-between items-center bg-gray-50 py-5 px-20 ">
        <div>Logo</div>
        <div class="flex gap-x-5">
            <a href="index.php?view=inicio">Inicio</a>
            <a href="index.php?view=salir">Salir</a>
        </div>

    </div>

    <div class="flex justify-center items-center pt-20 font-bold text-xl">
        Editar perfil
    </div>

    <div class="flex flex-col  justify-center items-center">
        <form method="post" class="flex flex-col">

            <div class="flex flex-col py-5">
                <label>Nombre</label>
                <input type="name" class="border border-solid rounded-lg "
                    value="<?= htmlspecialchars($estudiante['nombre']) ?>" id="name" name="editarNombreE" />
            </div>
            <div class="flex flex-col py-5">
                <label>Apellido</label>
                <input type="name" class="border border-solid rounded-lg "
                    value="<?= htmlspecialchars($estudiante['apellido']) ?>" id="apellido" name="editarApellidoE" />
            </div>
            <div class="flex flex-col  py-5">
                <label>Correo</label>
                <input type="email" class="border border-solid rounded-lg " id="email"
                    value="<?= htmlspecialchars($estudiante['email']) ?>" name="editarEmailE" />
            </div>


            <div class="flex flex-col  py-5">
                <label class="py-5">Localidad</label>
                <input type="text" class="border border-solid rounded-lg " id="email"
                    value="<?= htmlspecialchars($estudiante['localidad']) ?>" name="editarLocalidadE" />
            </div>
            <div class="p-10  py-5">
                <input type="hidden" value="1" name="enviaFormularioE" />
                <button class="border border-solid rounded-lg hover:bg-gray-50 px-5" type="submit">Editar</button>
        </form>

    </div>


</body>

</html>