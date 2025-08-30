<?php

$formulario = new formularioController();
$usuarios = $formulario->obtenerUsuariosController();
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
            <a href="index.php?view=inicioAdmin">Admin</a>

        </div>

    </div>
    </div>
    <div class="p-40">

        <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
            <thead class="bg-gray-200 text-left">

                <h1>Listado de personas en la BD</h1>
                <tr>
                    <th class="px-4 py-2 font-bold">Nombre completo</th>
                    <th class="px-4 py-2 font-bold">Email</th>
                    <th class="px-4 py-2 font-bold">Fecha de ingreso</th>
                    <th class="px-4 py-2 font-bold">Telefono</th>
                    <th class="px-4 py-2 font-bold">Direccion</th>
                    <th class="px-4 py-2 font-bold">Provincia</th>
                    <th class="px-4 py-2 font-bold">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usu): ?>
                    <tr>
                        <td class="px-4 py-2"><?= $usu['nombreCompleto'] ?></td>
                        <td class="px-4 py-2"><?= $usu['email'] ?></td>
                        <td class="px-4 py-2"><?= date("Y-m-d", strtotime($usu['fechaIngreso'])) ?></td>
                        <td class="px-4 py-2"><?= $usu['telefono'] ?? 'Sin registro' ?></td>
                        <td class="px-4 py-2"><?= $usu['calle']  ?> <?= $usu['altura'] ?? 'Sin registro' ?>
                        </td>
                        <td class="px-4 py-2"><?= $usu['provincia'] ?? 'Sin registro' ?></td>
                        <td class="px-4 py-2 flex gap-2">
                            <button type="button" data-id="<?= $usu['id']; ?>"
                                class="btnConId text-red-600 hover:underline">Dar de
                                baja</button>
                        </td>
                    </tr> <?php endforeach; ?>


            </tbody>

        </table>

        <!--overlay-->
        <div id="overlay" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
            <div class="bg-white p-6 rounded-xl w-96 shadow-lg">
                <h2 class="text-lg font-bold mb-4">Confirmar accion</h2>
                <p class="mb-4">¿Seguro que querés dar de baja al usuario?</p>
                <div>
                    <form method="post" action="index.php?view=post_bajaUsu">
                        <input type="hidden" name="darBaja" id="inputId" />
                        <button type="button" id="btnCancelar"
                            class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400">Cancelar</button>
                        <button type="submit"
                            class=" px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const overlay = document.getElementById('overlay');
        const inputId = document.getElementById('inputId');
        const cerrarOverlay = document.getElementById('btnCancelar');

        document.querySelectorAll(".btnConId").forEach(btn => {
            btn.addEventListener('click', () => {
                const id = btn.getAttribute('data-id');
                inputId.value = id; //Le paso el valor del id al input

                overlay.classList.remove('hidden');
            });
        });

        cerrarOverlay.addEventListener('click', () => {
            overlay.classList.add('hidden');
        });
    });
</script>

<!--Alerta-->
<?php if (isset($_GET['msg']) && $_GET['msg'] == 'ok'): ?>
    <script>
        alert('El usuario fue dado de baja correctamente');
    </script>
<?php elseif (isset($_GET['msg']) && $_GET['msg'] == 'error'): ?>
    <script>
        alert('Hubo un error inesperado');
    </script>
<?php endif; ?>