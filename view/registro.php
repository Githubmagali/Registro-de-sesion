<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <div>
        <div>

        </div>
    </div>

    <div class="flex flex-col">
        <form method="post" class="flex flex-col items-center">
            <div class="py-10 text-xl font-bold">Registrarse al sistema</div>
            <div class="flex flex-col pt-5">
                <label>Nombre completo</label>
                <input class="border border-solid rounded-lg hover:bg-gray-50 px-5" type="name" id="name"
                    name="registroNombre" />
            </div>

            <div class="flex flex-col pt-5">
                <label>Correo</label>
                <input class="border border-solid rounded-lg hover:bg-gray-50 px-5" type="email" id="email"
                    name="registroEmail" />
            </div>

            <div class="flex flex-col pt-5">
                <label>Contraeña</label>
                <input class="border border-solid rounded-lg hover:bg-gray-50 px-5" type="password" id="password"
                    name="registroPassword" />
            </div>
            <div class="flex flex-col pt-5">
                <label>Repetir contraeña</label>
                <input class="border border-solid rounded-lg hover:bg-gray-50 px-5" type="password" id="repetirPassword"
                    name="repetirPassword" />

            </div>

            <?php

            $registro = formularioController::registroController();
            ?>
            <div class="pt-5">
                <button type="submit" class="border border-solid rounded-lg hover:bg-gray-50 px-5">Enviar</button>
            </div>
            <div class="flex flex-col items-center">
                <div class="pt-5">¿Ya tenes una cuenta?</div>
                <a class="font-bold rounded-lg " href="index.php?view=ingreso">Ingresar </a>
            </div>
        </form>
    </div>

    <?php


    ?>

</body>

</html>