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

if (isset($_POST['darBaja'])) {
    $id = $_POST['darBaja'];
    $darDebaja = estudianteController::darDeBajaEstudianteController($id);
}

$estudiantes = new estudianteController();
$listaEstudiantes = $estudiantes::obtenerListaEstudiantesController();
#print_r($listaEstudiantes);

?>
<!DOCTYPE html>
<html lang="en">

<script>
/*setTimeout(() => {
    const alerta = document.getElementById('alerta');
    alerta.classList.add('opacity-0');
    setTimeout(() => alerta.remove(), 500);
}, 3000);*/
</script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
    <div class="flex justify-between items-center bg-gray-50 py-5 px-20 ">
        <div>Logo</div>
        <div class="flex gap-x-5">
            <a href="index.php?view=inicio">Inicio</a>
            <a href="index.php?view=salir">Salir</a>
            <a href="index.php?view=inicioAdmin">Admin</a>

        </div>

    </div>
    <div class="flex justify-center items-center pt-20">
        Estoy en inicio
    </div>
    <div class="p-40">

        <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
            <thead class="bg-gray-200 text-left">
                <tr>
                    <th class="px-4 py-2 font-bold">Nombre</th>
                    <th class="px-4 py-2 font-bold">Apellido</th>
                    <th class="px-4 py-2 font-bold">Email</th>
                    <th class="px-4 py-2 font-bold">Localidad</th>
                    <th class="px-4 py-2 font-bold">Acciones</th>
                </tr>
            </thead>
            <tbody>


                <?php foreach ($listaEstudiantes as $item): ?>

                <tr>
                    <td class="px-4 py-2"><?= $item['nombre'] ?></td>
                    <td class="px-4 py-2"><?= $item['apellido'] ?></td>
                    <td class="px-4 py-2"><?= $item['email'] ?></td>
                    <td class="px-4 py-2"><?= $item['localidad'] ?></td>
                    <td class="px-4 py-2 flex gap-2">
                        <a href="index.php?view=editarEstudiante&id=<?php echo $item['id']; ?>">Editar</a>
                        <form method="post">
                            <input type="hidden" value="<?= htmlspecialchars($item['id']); ?>" name="darBaja" />
                            <button type="submit" class="text-red-600 hover:underline">Dar de baja</button>
                        </form>
                    </td>
                </tr>

                <?php endforeach; ?>


            </tbody>
            <div class="flex gap-x-10">
                <div class="py-5 flex gap-x-10">
                    <a class="pb-6 font-bold text-gray-600" href="index.php?view=agregarEstudiante">Agregar registro</a>
                    <a class="pb-6 font-bold text-gray-600 " href="index.php?view=estudiantesBaja">Ver
                        estudiantes
                        dados de baja </a>
                </div>
            </div>
        </table>
    </div>

</body>

</html>