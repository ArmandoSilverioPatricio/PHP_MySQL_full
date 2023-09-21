<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <title>Eliminando registros</title>
</head>
<body>
    <h1>Eliminando registros en cat_Estatus avl_laboratorio</h1>
    <form name="insertForm" method="get" action="eliminarRegistros.php">
        <table border="0" align="center">
            <tr>
                <td>Nombre del estatus</td>
                <td><label for="estatusName" ></label>
                <input type="text" name="estatusName" id="estatusName"></td>
            </tr>
            <tr>
                <td>&nbsp</td>
                <td>&nbsp</td>
            </tr>
            <tr>
                <td><input type="submit" name="enviar" value="Eliminar registro"></td>
                <td><input type="reset" name="borrar" value="Limpiar"></td>
            </tr>
        </table>
    </form>

</body>
</html>