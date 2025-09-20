<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <div>Valor de año actual</div><input type="number" id="actual" value="100" />
    <div>Valor de año siguiente</div><input type="number" id="siguiente" value="200" />
    <div>Porcentaje</div><input type="number" id="devaluacion" value="1" />
    <button onclick="generar()">Generar</button>
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
        function analisis(actual, siguiente, futuro) {

            var array = [];
            const fechaActual = new Date();
            const anio1 = fechaActual.getFullYear();


            var actual1 = {
                anio: anio1,
                cotizacion: actual

            };

            var siguiente1 = {
                anio: anio1 + 1,
                cotizacion: siguiente
            };

            array.push(actual1);
            array.push(siguiente1);

            for (var i = 2; i <= 10; i++) {

                var cotizProyecto = {
                    anio: anio1 + i,
                    cotizacion: array[i - 1].cotizacion * (1 + futuro)
                }
                array.push(cotizProyecto);

            }
            console.log("valor", actual1);

            return array;

        }


        function generar() {

            const actual = parseInt(document.getElementById('actual').value);
            const siguiente = parseFloat(document.getElementById('siguiente').value);
            const futuro = parseFloat(document.getElementById('devaluacion').value);

            const proyeccion = analisis(actual, siguiente, futuro);

            const tbody = document.getElementById('tablaProyeccion').querySelector('tbody');
            tbody.innerHTML = ''; // limpiar 

            proyeccion.forEach(item => {
                const fila = document.createElement('tr');
                fila.innerHTML = `<td>${item.anio}</td><td>${item.cotizacion.toFixed(2)}</td>`;
                tbody.appendChild(fila);
            });
        }
    </script>




</body>

</html>