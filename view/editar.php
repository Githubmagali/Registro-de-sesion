<?php
$datosUsuario = new formularioController;
$usu = $datosUsuario::obtenerUsuarioController();



if (isset($_POST['enviaFormulario']) == 1) {
    $editarUsuario = $datosUsuario->editarUsuarioController();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex justify-center items-center pt-20 bg-sky-100">
        <div class="bg-sky-100">
            <a href="index.php?view=inicio">Inicio</a>
            <a href="index.php?view=salir">Salir</a>
        </div>
    </div>
    <div class="flex justify-center items-center pt-20">
        Editar perfil
    </div>
    <div class="flex flex-col  justify-center items-center">
        <form method="post" class="flex flex-col">

            <div class="flex flex-col py-5">
                <label>Nombre completo</label>
                <input type="name" value="<?= htmlspecialchars($usu['nombreCompleto']) ?>" id="name"
                    name="editarNombre" />

            </div>
            <div class="flex flex-col  py-5">
                <label>Correo</label>
                <input type="email" id="email" value="<?= htmlspecialchars($usu['email']) ?>" name="editarEmail" />
            </div>
            <div class="flex flex-col  py-5">
                <label>Contraeña</label>
                <input type="password" id="password" name="editarPassword" />
            </div>
            <div class="flex flex-col  py-5">
                <label>Repetir contraseña</label>
                <input type="password" id="password" placeholder="repetir password" name="repetirPassword" />
            </div>
            <div class="flex flex-col  py-5">
                <label>Telefono</label>
                <input type="text" id="telefono" value="<?= htmlspecialchars($usu['telefono']) ?>"
                    name="editarTelefono" />
            </div>
            <div class="flex flex-col  py-5">
                <label class="py-5">Provincia</label>
                <select id="provincia" name="editarProvincia">
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
                <input type="text" id="calle" value="<?= htmlspecialchars($usu['calle']) ?>" name="editarCalle" />
            </div>
            <div class="flex flex-col  py-5">
                <label>Altura</label>
                <input type="text" id="altura" value="<?= htmlspecialchars($usu['altura']) ?>" name="editarAltura" />
            </div>
            <?php

            ?>
            <div class="p-10  py-5">
                <input type="hidden" value="1" name="enviaFormulario" />
                <button class="" type="submit">Editar</button>
            </div>


    </div>
    </form>

</body>

</html>