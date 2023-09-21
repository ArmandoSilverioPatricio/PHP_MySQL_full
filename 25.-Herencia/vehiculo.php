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
			
			function setColor($colorCoche, $nameCar){
				$this->color = $colorCoche;
				
				echo "El color de " . $nameCar . " es: " . $this->color . "<br>";
			}
			
		}
		/*//Creando instancia de coche
		$reanult = new Coche(); //Estado inicial al objeto o instancia
		$mazda = new Coche();
		$seat = new Coche();
		
		$Mazda -> arrancar();
		$Mazda -> frenar();
		$Mazda -> girar();
		

		
		echo $Mazda->motor;
		$reanult->setColor("Red", "Renault");
		$seat->setColor("Blue", "Seat");*/
		
// ---------------------------------------------------------------------------------

	
	/*
	Los objetos tienen propiedades y funcionalidades
	Deben tener un estado inicial
	*/
		//nomencaltura para la creacion de una clase
		/*Renault, Mazda ...*/
		class Camion extends Coche{
			
			//para programar el estado inicial de un objeto usamos un constructor (metodo especial)
			//Creando constructor
			function Camion(){ //Metodo constructor
			// -> esto es para referenciar una propiedad o un metodo
			//.this es equivaliente al nombre de la clase
				$this->ruedas = 8;
				$this->color = "Gray";
				$this->motor = 2600;

			}
			//Sobrescritura de metodos
			function setColor($colorCamion, $nameCamion){
				$this->color = $colorCamion;
				
				echo "El color de " . $nameCamion . " es: " . $this->color . "<br>";
			}
			//Usando la instruccion parent para llamar al metodo de la instancia padre
			function arrancar(){
				parent::arrancar();
				
				echo "Camion arrancado !!! ";
				
			}
			
			
		}
		
	?>		
		
	
