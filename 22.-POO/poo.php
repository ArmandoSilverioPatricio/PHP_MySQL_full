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
	Los objetos tienen propiedades y funcionalidades
	Deben tener un estado inicial
	*/
		//nomencaltura para la creacion de una clase
		/*Renault, Mazda ...*/
		class Coche{
			var $ruedas;
			var $color;
			var $motor;
			
			//para programar el estado inicial de un objeto usamos un constructor (metodo especial)
			//Creando constructor
			function Coche(){ //Metodo constructor
			// -> esto es para referenciar una propiedad o un metodo
			//.this es equivaliente al nombre de la clase
				$this->ruedas = 4;
				$this->color = "";
				$this->motor = 1600;
				

			}
			
			function arrancar(){
				echo "Estoy arancando <br>";
			}
			
			function girar(){
				echo "Estoy girando <br>";
			}
			
			function frenar(){
				echo "Estoy frenando <br>";
			}
			
			function noRuedas(){
				echo "El numero de ruedas es " . $ruedas;
			}
		}
		//Creando instancia de coche
		$Reanult = new Coche(); //Estado inicial al objeto o instancia
		$Mazda = new Coche();
		$Seat = new Coche();
		
		$Mazda -> arrancar();
		$Mazda -> frenar();
		$Mazda -> girar();
		

		
		echo ("El vihiculo tiene: " );
	?>
	
</body>
</html>