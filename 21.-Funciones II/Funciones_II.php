<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
	
</head>
<body>
	
	<?php
		/*
		Parametros por valor y valores por referencia
		Parametro por valor Function example ($param);
		Parametro por referencia function example(&$param);
		*/
		//Decalrando argumento por valor
		echo "Declarando parametro por valor" . "<br>";
		function increment($val1){
			$val1 ++;
			
			return $val1;
		}
		
		$num = 5;
		
		echo(increment($num) . "<br>");
		
		echo($num) . "<br>";
		
		//Declarando argumento por referncia
		echo "Declarando parametro por referncia" . "<br>";

		function incrementReference(&$val1){
			$val1 ++;
			
			return $val1;
		}
		
		$num = 5;
		
		echo(incrementReference($num) . "<br>");
		
		echo($num) . "<br>";
		
		//Funcion que modifica Strings, declarando parametros por valor y  por referencia
		function changeUpper(&$param1){
				$param1 = strtolower($param1);
				
				$param1 = ucwords($param1);
				
				return $param1;
		}
		
		$string = "hOlA mUnDo";
		echo(changeUpper($string) . "<br>");
		echo $string . "<br>";
		
	?>
	
</body>
</html>