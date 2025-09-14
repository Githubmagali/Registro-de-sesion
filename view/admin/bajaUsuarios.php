<?php

$for = new formularioController();
$condiciones = $for->condicionesDeCreditoController();


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
            <a href="index.php?view=bajaUsuarios">Baja usuarios</a>
            <a href="index.php?view=pruebaDeTabla">Prueba tabla</a>
        </div>

    </div>
    </div>
    <div class="flex flex-col items-center p-20">

        <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
            <thead class="bg-gray-200 text-left">

                <h1 class="pb-20 font-bold">Listado de personas en la BD</h1>
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

                <tr>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2">
                    </td>
                    <td class="px-4 py-2"></td>
                    <td class="px-4 py-2 flex gap-2">
                        <button type="button" data-id="" class="btnConId text-green-600 hover:underline">Dar de
                            alta</button>
                    </td>
                </tr>

            </tbody>

        </table>

        <div class="col-6">
            <h4>Condiciones de financiamiento</h4>

            <label>Monto financiado (USD)</label>
            <div><span id="condiciones"></span></div>

            <label>Porcentaje del CAPEX financiado</label>
            <div><span id="capex"></span></div>

            <label>Plazo (años)</label>
            <div><span id="plazo"></span></div>

            <label>Tasa de interés (en pesos)</label>
            <div><span id="interes"></span></div>

            <h4 class="mt-10">Condiciones del Flujo de Fondos</h4>
            <label>Tasa de descuento</label>
            <div><span id="descuento"></span></div>
        </div>

        <script>
        async function cargarCondiciones() {
            try {
                let response = await fetch('');
                let data = await response.json();

                document.getElementById("condiciones").innerText = "USD " + data.monto_usd;
                document.getElementById("capex").innerText = data.porcentaje_capex + " %";
                document.getElementById("plazo").innerText = (data.plazo_meses / 12) + " años";
                document.getElementById("interes").innerText = data.tasa_interes + " %";
                document.getElementById("descuento").innerText = data.tasa_descuento + " %";
            } catch (error) {
                console.error("Error cargando condiciones:", error);
            }
        }

        cargarCondiciones();
        </script>


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