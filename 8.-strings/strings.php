<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	
	<style>
		.resaltar{
			color: #F00;
			font-weight:bold;
		}
	</style>
</head>
<body>
	<?php
		echo '<p class="resaltar">Esto es un ejemplo de string</p>';
		//Escape de caracreres
		echo "<p class=\"resaltar\">Esto es un ejemplo de string con escape de caracteres</p>";
		
		$name = "Armando";
		
		echo "Hola $name <br>";
		
		/*Funciones para comparar strings
		strcmp
		strcasecmp*/
		
		$var1 = "home";
		$var2 = "HOME";
		
		$resultado=strcmp($var1, $var2);//Devuleve 0 si son iguales, devuelve 1 si no son iguales 
		
		if($resultado){
			echo "No coinciden <br>";
			}else {
				echo "Coinciden <br>";
		}
		$resultado1=strcasecmp($var1, $var2);//Devuleve 0 si son iguales, devuelve 1 si no son iguales 
		
		if(!$resultado1){
			echo "Coinciden";
			}else {
				echo "No coinciden";
			
		}
	?>
	
    
</body>
</html>