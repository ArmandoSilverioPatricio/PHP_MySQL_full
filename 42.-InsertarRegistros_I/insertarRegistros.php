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

    //$busqueda = $_GET['buscar'];

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

    $queryProd = "INSERT INTO cat_Estatus (c_estatus_nombre) VALUES('Prueba demo_02');";

//Ejecutamos la consulta usando la funcion mysqli_query(conexion, sql);
//Con esto acabamos de ejecutar la consulta y cargamos en memoria los datos
    $resultQueryProd = mysqli_query($conProd, $queryProd);
    mysqli_close($conProd);


?>

</body>
</html>