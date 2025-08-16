<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>

        <div>
            <div>
                <a href="index.php?view=registro">Registro</a>

            </div>
        </div>

    </body>


    <form method="post">
        <div> Ingresar al sistema</div>
        <label>Email</label>
        <input type="email" id="email" placeholder="Email" name="ingresoEmail" />
        <label>Contraseña</label>
        <input type="password" id="password" placeholder="Password" name="ingresoPassword" />

        <?php

        $ingreso = new formularioController();
        $in = $ingreso->ingresoController();
        ?>
        <button type="submit">Ingresar</button>

    </form>

</body>

</html>