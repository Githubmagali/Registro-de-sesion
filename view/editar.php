<?php
$datosUsuario = new formularioController;
$usu = $datosUsuario::obtenerUsuarioController();



if (isset($_POST['enviaFormulario'])  && $_POST['enviaFormulario'] == 2) {
    $editarUsuario = $datosUsuario->editarUsuarioController();
}


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
                <label>Nombre completo</label>
                <input type="name" class="border border-solid rounded-lg "
                    value="<?= htmlspecialchars($usu['nombreCompleto']) ?>" id="name" name="editarNombre" />

            </div>
            <div class="flex flex-col  py-5">
                <label>Correo</label>
                <input type="email" class="border border-solid rounded-lg " id="email"
                    value="<?= htmlspecialchars($usu['email']) ?>" name="editarEmail" />
            </div>
            <div class="flex flex-col  py-5">
                <label>Contraeña</label>
                <input type="password" class="border border-solid rounded-lg " id="password" name="editarPassword" />
            </div>
            <div class="flex flex-col  py-5">
                <label>Repetir contraseña</label>
                <input type="password" class="border border-solid rounded-lg " id="password"
                    placeholder="repetir password" name="repetirPassword" />
            </div>
            <div class="flex flex-col  py-5">
                <label>Telefono</label>
                <input type="text" class="border border-solid rounded-lg " id="telefono"
                    value="<?= htmlspecialchars($usu['telefono']) ?>" name="editarTelefono" />
            </div>
            <div class="flex flex-col  py-5">
                <label class="py-5">Provincia</label>
                <select id="provincia" class="border border-solid rounded-lg " name="editarProvincia">
                    <option value="jujuy" <?= ($usu['provincia'] == "jujuy") ? "selected" : "" ?>>Jujuy</option>
                    <option value="salta" <?= ($usu['provincia'] == "salta") ? "selected" : "" ?>>Salta</option>
                    <option value="tucuman" <?= ($usu['provincia'] == "tucuman") ? "selected" : "" ?>>Tucuman
                    </option>
                    <option value="misiones" <?= ($usu['provincia'] == "misiones") ? "selected" : "" ?>>Misiones
                    </option>
                    <option value="catamarca" <?= ($usu['provincia'] == "catamarca") ? "selected" : "" ?>>Catamarca
                    </option>
                    <option value="formosa" <?= ($usu['provincia'] == "formosa") ? "selected" : "" ?>>Formosa
                    </option>
                    <option value="chaco" <?= ($usu['provincia'] == "chaco") ? "selected" : "" ?>>Chaco</option>
                    <option value="santiago del estero"
                        <?= ($usu['provincia'] == "santiago del estero") ? "selected" : "" ?>>
                        Santiago Del Estero</option>
                    <option value="la rioja" <?= ($usu['provincia'] == "la rioja") ? "selected" : "" ?>>La Rioja
                    </option>
                    <option value="cordoba" <?= ($usu['provincia'] == "cordoba") ? "selected" : "" ?>>Cordoba
                    </option>
                    <option value="buenos aires" <?= ($usu['provincia'] == "Buenos Aires") ? "selected" : "" ?>>Buenos
                        Aires</option>

                </select>

            </div>
            <div class="flex flex-col  py-5">
                <label>Calle</label>
                <input class="border border-solid rounded-lg " type="text" id="calle"
                    value="<?= htmlspecialchars($usu['calle']) ?>" name="editarCalle" />
            </div>
            <div class="flex flex-col  py-5">
                <label>Altura</label>
                <input class="border border-solid rounded-lg " type="text" id="altura"
                    value="<?= htmlspecialchars($usu['altura']) ?>" name="editarAltura" />
            </div>
            <?php

            ?>
            <div class="p-10  py-5">
                <input type="hidden" value="1" name="enviaFormulario" />
                <button class="border border-solid rounded-lg hover:bg-gray-50 px-5" type="submit">Editar</button>
        </form>

        <button id="openBtn" type="button" class="border border-solid rounded-lg hover:bg-gray-50 px-5">Dar de
            baja</button>
    </div>


    <!--Overlay-->

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
                <button id="closeBtn" type="button"
                    class="border border-2  border-red-200 rounded-lg hover:bg-red-50 px-5">Cancelar</button>
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