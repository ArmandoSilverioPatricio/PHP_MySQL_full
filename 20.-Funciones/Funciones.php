<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
	
</head>
<body>
	
	<?php
		$word = "ARMANDO";
		
		echo(strtolower($word) . "<br>");
		echo(strtoupper($word) . "<br>");
		
		//Funcion propia pasando parametros
		
		function suma($num1, $num2){
			$resultado = $num1 + $num2;
			
			//Devuelve el valor almacenado en $resultado
			return $resultado;
		}
		
		echo(suma(1,2) . "<br>");
		
		//Parametros por defecto usando una funcion propia
		
		function fraseUpper($phrase, $convertion = true){
			//Lo que hay almacenada pase a minusculas
			$phrase = strtolower($phrase);
			
			if($convertion == true){
				$result = ucwords($phrase);
			}else{
				$result = strtoupper($phrase);
			}
			return $result;
		}
		
		echo(fraseUpper("This is a test"));
		
		
		
	?>
</body>
</html>