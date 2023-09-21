<?php

	class Compra_vehiculo{
		
		private $precio_base;
		//creando variabl estatica
		private static $ayuda = 0; //No pertenece a ningun objeto Compra_vehiculo, pertenece a la clase
		
		//Definiendo constructor	
		function Compra_vehiculo($gama){
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}
			
			else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}			
		}// fin constructor
		
		//Creando metodo static 
		static function descuentoGobierno(){
			//haciendo referencia a variable dentro de una clase static
			if(date("m-d-y") > "09-12-2023"){
				self::$ayuda = 4500;
			}
			
		}
		
		
		function climatizador(){		
			
			
				$this->precio_base+=2000;					
			
			
		}// fin climatizador
		
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				
				$this->precio_base+=3500;
				
			}
			
			else{
				
				$this->precio_base+=5000;
				
			}
			
		}// fin tapicería
		
		
		
		function precio_final(){
			//Para hacr referencia a un campo o varible staic usamos el operador self::
			//Usando operador self::
			$valorFinal = $this->precio_base-self::$ayuda;
			return $valorFinal;	
			
		}// fin precio final
		
		
		
	}// fin clase


?>