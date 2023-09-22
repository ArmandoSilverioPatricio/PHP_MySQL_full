<?php

$busqueda = $_GET['buscar'];
/*
    * Using mysqli_fetch_array function. Working with associative array
    * Query, with wildcard characters in MySQL
    */

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

$queryProd = "SELECT * FROM cat_Estatus_copy1 WHERE c_estatus_nombre LIKE '$busqueda%'";

//Ejecutamos la consulta usando la funcion mysqli_query(conexion, sql);
//Con esto acabamos de ejecutar la consulta y cargamos en memoria los datos
$resultQueryProd = mysqli_query($conProd, $queryProd);
//Using an associative array mysqli_fetch_array
while ($fila = mysqli_fetch_array($resultQueryProd, MYSQLI_ASSOC)) {

    //Usando  caracteres comodin
    // % cadena de caracteres
    // _ un unico caracter
    echo "<table><tr><td>" . $fila['n_estatus_id'] . " ";
    //echo  . "</td><td></tr></table>";
    echo $fila['c_estatus_nombre'] . "</td><td></tr></table>";
    echo "<br>";
}


?>