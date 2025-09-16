<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Práctica Cotizaciones Proyectadas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        input {
            margin: 5px;
        }

        table {
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 5px 10px;
            text-align: right;
        }
    </style>
</head>

<body>
    <h2>Proyección de Cotizaciones del Dólar</h2>

    <label>Año actual USD: <input type="number" id="usdActual" value="350"></label><br>
    <label>Año siguiente USD: <input type="number" id="usdSiguiente" value="380"></label><br>
    <label>Devaluación proyectada (0.3 = 30%): <input type="number" step="0.01" id="devaluacion"
            value="0.3"></label><br>
    <button onclick="generarProyeccion()">Generar Proyección</button>

    <table id="tablaProyeccion">
        <thead>
            <tr>
                <th>Año</th>
                <th>Cotización (USD)</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script>
        function analisisEconomico_getCotizacionesDolarProyectadas(cotizacionUSDAnioActual, cotizacionUSDAnioSiguiente,
            devaluacionProyectada) {
            var arrayProyeccion = [];
            const fechaActual = new Date();
            const anio1 = fechaActual.getFullYear();
            var cotizacionAnioActual = {
                anio: anio1,
                cotizacion: cotizacionUSDAnioActual
            };
            var cotizacionAnioSiguiente = {
                anio: anio1 + 1,
                cotizacion: cotizacionUSDAnioSiguiente
            };

            arrayProyeccion.push(cotizacionAnioActual);
            arrayProyeccion.push(cotizacionAnioSiguiente);

            for (var i = 2; i <= 25; i++) {
                var cotizacionProyectadaAnio = {
                    anio: anio1 + i,
                    cotizacion: arrayProyeccion[i - 1].cotizacion * (1 + devaluacionProyectada)
                }
                arrayProyeccion.push(cotizacionProyectadaAnio);
            }
            return arrayProyeccion;
        }

        function generarProyeccion() {
            const usdActual = parseFloat(document.getElementById('usdActual').value);
            const usdSiguiente = parseFloat(document.getElementById('usdSiguiente').value);
            const devaluacion = parseFloat(document.getElementById('devaluacion').value);

            const proyeccion = analisisEconomico_getCotizacionesDolarProyectadas(usdActual, usdSiguiente, devaluacion);

            const tbody = document.getElementById('tablaProyeccion').querySelector('tbody');
            tbody.innerHTML = ''; // limpiar tabla

            proyeccion.forEach(item => {
                const fila = document.createElement('tr');
                fila.innerHTML = `<td>${item.anio}</td><td>${item.cotizacion.toFixed(2)}</td>`;
                tbody.appendChild(fila);
            });
        }
    </script>
</body>

</html>