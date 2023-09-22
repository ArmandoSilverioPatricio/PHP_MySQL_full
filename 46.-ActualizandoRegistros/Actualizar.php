

<?php


$estatusName = $_GET["estatusName"];
$estatusID =

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

$queryProd = "UPDATE cat_Estatus_copy1 SET c_estatus_nombre = '$estatusName' WHERE n_estatus_id = '$estatusID';";

//Ejecutamos la consulta usando la funcion mysqli_query(conexion, sql);
//Con esto acabamos de ejecutar la consulta y cargamos en memoria los datos
$resultQueryProd = mysqli_query($conProd, $queryProd);

    if($resultQueryProd == false){
        echo "Error en la consulta";
    }else{
        echo "Registro Actualizado !!!" . "<br>";
            echo "<table><tr><td>";
            echo $estatusID . "</td><td>";
            echo $estatusName . "</td></tr><td></table>";
    }

mysqli_close($conProd);

?>