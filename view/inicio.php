<?php


$estudiantes = new estudianteController();
$listaEstudiantes = $estudiantes::obtenerListaEstudiantesController();


?>
<!DOCTYPE html>
<html lang="en">

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
                        <a href="index.php?view=editarEstudiante&id=<?= base64_encode($item['id']); ?>">Editar</a>
                        <button type="button" data-id="<?= base64_encode($item['id']); ?>"
                            class="btnOverlay text-red-600 hover:underline">Dar de baja</button>

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

    <!--Overlay -->
    <div id="overlay" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div div class="bg-white p-6 rounded-xl w-96 shadow-lg">
            <h2 class="text-lg font-bold mb-4">Confirmar acción</h2>
            <p class="mb-4">¿Seguro que querés dar de baja este estudiante?</p>
            <div div class="flex justify-end gap-3">
                <button type="button" id="btnCerrarOverlay" class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400">
                    Cancelar
                </button>
                <form method="post" id="formulario" action="index.php?view=post_inicio">
                    <input type="hidden" name="darBaja" id="inputId">
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        Confirmar
                    </button>
                </form>
            </div>

        </div>

    </div>

</body>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const overlay = document.getElementById('overlay');
    const inputId = document.getElementById('inputId');
    const btnCerrarOverlay = document.getElementById('btnCerrarOverlay');

    document.querySelectorAll(".btnOverlay").forEach(btn => {
        btn.addEventListener("click", () => {
            const id = btn.getAttribute("data-id");
            inputId.value = id; //paso el id al input darBaja

            overlay.classList.remove("hidden");
        });
    });

    btnCerrarOverlay.addEventListener("click", () => {
        overlay.classList.add('hidden');
    });
});
</script>

<!--Alertas-->
<script>
<?php if (isset($_GET['msg']) && $_GET['msg'] == 'ok'): ?>
alert('Estudiante dado de baja correctamente');
<?php elseif (isset($_GET['msg']) && $_GET['msg'] == 'error'): ?>
alert('Hubo un error al dar de baja al estudiante');
<?php endif; ?>

<?php if(isset($_GET['msgEditar']) && $_GET['msgEditar'] == 'ok'): ?>
alert('Editado correctamente');
<?php elseif (isset($_GET['msgEditar']) && $_GET['msgEditar'] == 'error'): ?>
alert('hubo un error');
<?php endif; ?>
</script>



</html>