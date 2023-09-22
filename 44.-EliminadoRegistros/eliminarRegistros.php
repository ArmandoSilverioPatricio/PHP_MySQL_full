<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php


$estatusName = $_GET["estatusName"];

require('./connection.php');


$conProd = mysqli_connect($hostProd, $userNameProd, $passProd);
if ($conProd->connect_errno) {
    echo "Fallo la conexion a MySQL: (" . $conProd->errno . ") " . $conProd->connect_errno;
    exit();
}
//Validando la base de datos que se esta usando
mysqli_select_db($conProd, $dbNameProd) or die ("No se encontro las Base de datos");
//Setiando la codificacion de caracteres
mysqli_set_charset($conProd, "utf8");

$queryProd = "DELETE FROM cat_Estatus_copy1 WHERE n_estatus_id = '$estatusName'";

//Ejecutamos la consulta usando la funcion mysqli_query(conexion, sql);
//Con esto acabamos de ejecutar la consulta y cargamos en memoria los datos
$resultQueryProd = mysqli_query($conProd, $queryProd);

    if($resultQueryProd == false){
        echo "Error en la consulta";
    }else{
        /*echo "Registro Eliminado !!!" . "<br>";
        echo mysqli_affected_rows($conProd);*/
        if(mysqli_affected_rows($conProd) == 0){
            echo "No hay registros que eliminar con ese id";
        }else if(mysqli_affected_rows($conProd) == 1){
            echo "Se ha eliminado un registro";

            echo "<table><tr><td>$estatusName</td></tr></table>";
        }else{
            echo "Se han eliminado: " . mysqli_affected_rows($conProd) . " registros";
        }
    }

mysqli_close($conProd);

?>

</body>
</html>