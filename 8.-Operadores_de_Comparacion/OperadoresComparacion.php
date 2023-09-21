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
		$var1 = 8;
		$var2 = "8";
		$var3 = "Armando";
		
		function usandoOperadordeIgualdadDoble(){
		global $var1, $var2;
			
			if($var1 == $var2){
				echo "Son iguales <br>";
			}else{
				echo "No son iguales <br>";
				}
			}
			
		//Usando operador de igualdar estricta
		function usandoOperadorDeIgualdadEstricta(){
		global $var1, $var2, $var3;
			if($var1 === $var1){
				echo "Son iguales <br>";
			}else{
				echo "No son iguales <br>";
			}
		}
		
		usandoOperadordeIgualdadDoble();
		usandoOperadorDeIgualdadEstricta();
		
		//Usando operadro diferente que verdadero si 
		
		function usandoOperadorDifrenteDe(){
		global $var1, $var2;
			
			if($var1 != $var2){
				echo "Son diferentes <br>";
			}else{
				echo "No son diferentes br>";
				}
			}
		
	?>
</body>
</html>