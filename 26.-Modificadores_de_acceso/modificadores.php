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
	Modularizacion
	Encapsulacion: significa que en que los diferentes objetos o clases tengan caracteristicas encapsuladas para que solo puedan ser accedidas desde el mismo objeto o clase para eso usamos los modificadores de acceso
	Modificadores de acceso
		Public: accesible desde cualquier parte
		Private: accesible desde la propia clase
		Protected: accesible desde la propia clase y clases heredadas
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
		
		echo "El Mazda tiene " . $mazda->ruedas ." ruedas <br>";
	
	  
	 
		
	?>
	
</body>
</html>