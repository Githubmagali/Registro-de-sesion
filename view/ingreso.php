<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div>

    </div>


    <form method="post" class="flex flex-col items-center">
        <div class="py-10 text-xl font-bold"> Ingresar al sistema</div>
        <div class="flex flex-col pt-5">
            <label>Email</label>
            <input type="email" id="email" placeholder="Email" name="ingresoEmail"
                class="border border-solid rounded-lg hover:bg-gray-50" />

        </div>

        <div class="flex flex-col pt-5">
            <label>Contraseña</label>
            <input type="password" id="password" placeholder="Password" name="ingresoPassword"
                class="border border-solid rounded-lg hover:bg-gray-50" />

        </div>


        <?php

        $ingreso = new formularioController();
        $in = $ingreso->ingresoController();
        ?>
        <div class="flex gap-x-5 py-10">
            <button type="submit" class="border border-solid rounded-lg hover:bg-gray-50">Ingresar</button>
            <a href="index.php?view=registro" class="font-bold rounded-lg ">Registrate</a>
        </div>
    </form>
    <div class=" items-center justify-center">

    </div>

</body>

</html>