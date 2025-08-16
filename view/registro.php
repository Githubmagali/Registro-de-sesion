<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <div>
        <div>
            <a href="index.php?view=ingreso">Ingreso </a>
        </div>
    </div>

    <div>
        <form method="post">
            <div>Registrarse al sistema</div>
            <label>Nombre completo</label>
            <input type="name" id="name" placeholder="Nombre" name="registroNombre" />
            <label>Correo</label>
            <input type="email" id="email" placeholder="Email" name="registroEmail" />
            <label>Contraeña</label>
            <input type="password" id="password" placeholder="password" name="registroPassword" />
            <label>Repetir contraeña</label>
            <input type="password" id="repetirPassword" placeholder="password" name="repetirPassword" />
            <?php

            $registro = formularioController::registroController();
            ?>
            <button type="submit">Enviar</button>
        </form>
    </div>

    <?php


    ?>

</body>

</html>