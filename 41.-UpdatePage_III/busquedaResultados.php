<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php

    function ejecutaConsulta($laBusqueda){

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

        $queryProd = "SELECT c_unidad_nombre, c_unidad_alias, d_unidad_fechaalta, c_unidad_vin, c_unidad_placa 
              FROM dat_Unidad WHERE n_estatus_id = 1 AND c_unidad_nombre LIKE '$laBusqueda%'";

//Ejecutamos la consulta usando la funcion mysqli_query(conexion, sql);
//Con esto acabamos de ejecutar la consulta y cargamos en memoria los datos
        $resultQueryProd = mysqli_query($conProd, $queryProd);
//Using an associative array mysqli_fetch_array
        while ($fila = mysqli_fetch_array($resultQueryProd, MYSQLI_ASSOC)) {

            //Usando  caracteres comodin
            // % cadena de caracteres
            // _ un unico caracter
            echo "<table><tr><td>";


            echo $fila['c_unidad_nombre'] . "</td><td>";
            echo $fila['c_unidad_alias'] . "</td><td>";
            echo $fila['d_unidad_fechaalta'] . "</td><td>";
            echo $fila['c_unidad_vin'] . "</td><td>";
            echo $fila['c_unidad_placa'] . "</td><td></tr></table>";

            echo "<br>";
            echo "<br>";
        }
        mysqli_close($conProd);
    }
?>
</head>
<body>

<?php

    $miBusqueda = $_GET["buscar"];
    //Esta variable sirve para indicarle al formulario que la informacion se envia en la misma pagina
    $miPag = $_SERVER["PHP_SELF"];

    if($miBusqueda != NULL){
        ejecutaConsulta($miBusqueda);
    }else{
        echo ("<form action='" . $miPag . "'method='get'>
        <label>Buscar: <input type='text' name='buscar'></label>
        <input type='submit' name='enviado' value='Vamos !!!'>
        </form>");
    }

?>

</body>
</html"