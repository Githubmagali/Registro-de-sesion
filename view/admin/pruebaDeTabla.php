<?php

$controlador = new formularioController();
$datos = $controlador->condicionesDeCreditoController();

#print_r($datos);


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Proyección Cotizaciones</title>

</head>

<body class="bg-gray-100 font-sans p-6">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold text-center mb-6">Proyección de Cotizaciones del Dólar</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <div>
                <label class="block text-gray-700">Año actual USD</label>
                <input type="number" id="usdActual" value="<?= $datos[0]['monto_usd'] ?>"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-gray-700">Año siguiente USD</label>
                <input type="number" id="usdSiguiente" value="<?= $datos[0]['porcentaje_capex'] ?>"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block text-gray-700">Devaluación proyectada</label>
                <input type="number" step="0.01" id="devaluacion" value="0.3"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
        </div>

        <button onclick="generarProyeccion()"
            class="bg-blue-500 text-white font-semibold px-4 py-2 rounded hover:bg-blue-600 transition mb-4">
            Generar Proyección
        </button>

        <table class="table-auto w-full border border-gray-300 rounded overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 text-left">Año</th>
                    <th class="px-4 py-2 text-right">Cotización (USD)</th>
                </tr>
            </thead>
            <tbody id="tablaProyeccion">
                <!-- filas generadas aquí -->
            </tbody>
        </table>
    </div>

    <script>
        function analisisEconomico_getCotizacionesDolarProyectadas(usdActual, usdSiguiente, devaluacion) {
            let arrayProyeccion = [];
            const anio1 = new Date().getFullYear();

            arrayProyeccion.push({
                anio: anio1,
                cotizacion: usdActual
            });
            arrayProyeccion.push({
                anio: anio1 + 1,
                cotizacion: usdSiguiente
            });

            for (let i = 2; i <= 25; i++) {
                arrayProyeccion.push({
                    anio: anio1 + i,
                    cotizacion: arrayProyeccion[i - 1].cotizacion * (1 + devaluacion)
                });
            }
            return arrayProyeccion;
        }

        function generarProyeccion() {
            const usdActual = parseFloat(document.getElementById('usdActual').value);
            const usdSiguiente = parseFloat(document.getElementById('usdSiguiente').value);
            const devaluacion = parseFloat(document.getElementById('devaluacion').value);

            const proyeccion = analisisEconomico_getCotizacionesDolarProyectadas(usdActual, usdSiguiente, devaluacion);
            const tbody = document.getElementById('tablaProyeccion');
            tbody.innerHTML = '';

            proyeccion.forEach(item => {
                const fila = document.createElement('tr');
                fila.className = 'hover:bg-gray-100';
                fila.innerHTML =
                    `<td class="px-4 py-2">${item.anio}</td><td class="px-4 py-2 text-right">${item.cotizacion.toFixed(2)}</td>`;
                tbody.appendChild(fila);
            });
        }
    </script>
</body>

</html>