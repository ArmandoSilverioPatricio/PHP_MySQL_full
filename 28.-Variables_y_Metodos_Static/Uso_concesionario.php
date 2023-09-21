<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");
	
	Compra_vehiculo::$ayuda = 10000;
	
	$compraAntonio = new Compra_vehiculo("compacto");
	
	$compraAntonio -> climatizador();
	
	$compraAntonio -> tapiceria_cuero("blanco");
	
	echo $compraAntonio->precio_final() . "<br>";
	
	$compraAna = new Compra_vehiculo();
	
	
	$compraAna -> climatizador();
	$compraAna -> tapiceria_cuero("rojo");
	
	echo $compraAna -> precio_final() . "<br>";
	
	


?>
</body>
</html>