<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
	
</head>
<body>
	
	<?php
		
		include('vehiculo.php');
		
		$mazda = new Coche();
		$pegaso = new Camion();
	
		echo "El Mazda tiene: " . $mazda->ruedas . " ruedas <br>";
		echo "El Pegaso tiene: " . $pegaso->ruedas . " ruedas <br>";
		
		$mazda
	?>
	
</body>
</html>