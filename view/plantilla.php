<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://www.google.com/recaptcha/api.js?render=_reCAPTCHA_site_key"></script>
    <!-- dsCountDown plugin -->
    <script src="https://cdn.jsdelivr.net/gh/mikhus/jquery-dscountdown@master/dist/jquery.dscountdown.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/mikhus/jquery-dscountdown@master/dist/jquery.dscountdown.css">
</head>




<?php

if (isset($_GET['view'])) {

    if (
        $_GET['view'] == "registro" ||
        $_GET['view'] == "ingreso" ||
        $_GET['view'] == "inicio" ||
        $_GET['view'] == "salir" ||
        $_GET['view'] == "editar"

    ) {
        include "view/" . $_GET['view'] . ".php";
    } else {
        include "view/error404.php";
    }
} else {
    include "view/registro.php";
}
?>

</html>