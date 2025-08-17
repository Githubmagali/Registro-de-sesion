<?php

$datosUsuario = new formularioController;


if (isset($_POST['estado']) && $_POST['estado'] == 1) {
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
    <div class="flex flex-col justify-center items-center pt-20">
        <div class="font-bold pt-10 pb-20">Dar de baja</div>
        <button id="openBtn" class="border border-solid rounded-lg hover:bg-gray-50 px-5">Dar de baja</button>


        <div id="overlay" class="fixed inset-0 bg-gray-600 bg-opacity-60 hidden items-center justify-center z-50">

            <div class="bg-white rounded-lg shadow-lg p-6 max-w-md text-center">
                <div class="flex flex-col gap-y-5">
                    <div class="font-bold text-gray-500">¿Esta seguro que desea dar de baja?</div>
                    <div> Esta accion es irreversible</div>
                </div>
                <div class="flex items-center justify-center gap-x-4 pt-5">
                    <form method="post">
                        <input type="hidden" value="1" name="estado" />
                        <button type="submit" class="border border-solid rounded-lg hover:bg-gray-50 px-5"> Dar de
                            baja</button>
                    </form>
                    <button id="closeBtn"
                        class="border border-2  border-red-200 rounded-lg hover:bg-red-50 px-5">Cancelar</button>
                </div>

            </div>
        </div>

    </div>

    <script>
        const overlay = document.getElementById('overlay');
        const openBtn = document.getElementById('openBtn');
        const closeBtn = document.getElementById('closeBtn');

        openBtn.addEventListener('click', () => {
            overlay.classList.remove('hidden');
            overlay.classList.add('flex');
        });

        closeBtn.addEventListener('click', () => {
            overlay.classList.remove('flex');
            overlay.classList.add('hidden');
        });

        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) {
                overlay.classList.remove('flex');
                overlay.classList.add('hidden');
            }
        });
    </script>

</body>

</html>