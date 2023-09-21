<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
	
</head>
<body>
	
	<?php
	/*Herencian en POO, Superclases y subclases
	  Reutilizacion de codigo
	  
	  Herencia sintaxis
	  class1{...}
		class2 extends class1{...}
			class3 extends class2 {...}
	 */
	 
		include('vehiculo.php');
		
		$mazda = new Coche();
		$pegaso = new Camion();
		
		echo "El Mazda tiene " . $mazda->ruedas . " ruedas <br>";
		echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas <br>";
		
		$pegaso -> frenar();
		// $pegaso -> setColor();
		$pegaso -> arrancar();
		
	  
	 
		
	?>
	
</body>
</html>