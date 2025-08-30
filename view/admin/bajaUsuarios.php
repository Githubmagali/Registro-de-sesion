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