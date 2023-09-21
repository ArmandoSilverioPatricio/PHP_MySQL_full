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
	setter -- modificar
	getter -- ver la propiedades
	*/
	
	
	include('vehiculo.php');
	    
		$mazda = new Coche();
		$pegaso = new Camion();
		/*
		$mazda -> frenar();
		$pegaso -> arrancar();
		*/
		//$mazda -> ruedas = 10;
		
		//Metodos get y set nos permiten accedes a los atributos de los objetos
		
		echo "El Mazda tiene " . $mazda->getRuedas() . " ruedas <br>";
		echo "El Pegaso tiene " . $pegaso->getRuedas() . " ruedas <br>";
		
		echo "El mazda tiene un motor de " . $mazda->getMotor() . " cc<br>"  
	
	  
	?>
	
</body>
</html>