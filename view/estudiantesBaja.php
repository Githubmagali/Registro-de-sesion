<?php
$estudiantes = new estudianteController();

$listaEstudiantes = $estudiantes::estudiantesDadosDeBajaController();

#print_r($listaEstudiantes);

if (isset($_POST['darAlta'])) {
    $id = $_POST['darAlta'];
    $darAlta = $estudiantes::darDeAltaEstudianteController($id);
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
    <div class="flex justify-center items-center pt-20">

    </div>
    <div class="p-40">
        <div class="flex gap-x-10">
            <div class="py-5 flex gap-x-10">
                <a class="pb-6 font-bold text-gray-600" href="index.php?view=inicio">Volver al inicio</a>

            </div>
        </div>

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
                            <form method="post">
                                <input type="hidden" value="<?= htmlspecialchars($item['id']); ?>" name="darAlta" />
                                <button type="submit" class="text-green-600 hover:underline">Dar de alta</button>
                            </form>
                        </td>
                    </tr>

                <?php endforeach; ?>


            </tbody>

        </table>
    </div>

</body>

</html>