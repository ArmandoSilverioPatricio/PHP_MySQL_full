<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Operadores de Comparación</title>
</head>
<body>
    <?php

    /*
        * Using mysqli_fetch_array function. Working with associative array
        * Query, with wildcard characters in MySQL
        */

		require('connexion.php');


		$conProd = mysqli_connect($hostProd, $userNameProd, $passProd);
		if($conProd -> connect_errno){
			echo "Fallo la conexion a MySQL: (" . $conProd->errno . ") " .$conProd->connect_errno;
			exit();
		}
		//Validando la base de datos que se esta usando
		mysqli_select_db($conProd, $dbNameProd) or die ("No se encontro las Base de datos");
		//Setiando la codificacion de caracteres
		mysqli_set_charset($conProd, "utf8");

		$queryProd = "SELECT a.n_dispositivo_id, a.c_dispositivo_mmid, b.c_unidad_alias, b.c_unidad_placa, b.c_unidad_vin 
					  FROM dat_Dispositivo a, dat_Unidad b, rel_UnidadDispositivo c 
					  WHERE a.n_dispositivo_id = c.n_dispositivo_id AND b.n_unidad_id = c.n_unidad_id AND a.n_estatus_id=4 AND b.n_estatus_id=1 AND c.n_estatus_id=1 AND b.n_cliente_id=14;";

		//Ejecutamos la consulta usando la funcion mysqli_query(conexion, sql);
		//Con esto acabamos de ejecutar la consulta y cargamos en memoria los datos
		$resultQueryProd = mysqli_query($conProd, $queryProd);

		while($fila=mysqli_fetch_row($resultQueryProd)){

			echo "<table><tr><td>";
			echo $fila[0] . "</td><td>";
			echo $fila[1] . "</td><td>";
			echo $fila[2] . "</td><td>";
			echo $fila[3] . "</td><td>";
			echo $fila[4] . "</td><td></tr></table>";
			echo "<br>";
		}


	?>
</body>
</html>

