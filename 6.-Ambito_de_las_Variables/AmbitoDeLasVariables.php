<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<?php
	/*EN php tenemos tres ambitos
	*local: Declarada en una funcion y solo funciona dentro de la funcion 
	*Global:Se puede usar en cualquier parte del codigo
	*Super Global: Declarada com array
	*/
	
		$name = "Armando";
		
		
		function givemeName(){
			//Declarando una variable de ambito Global
			
			global $name;
			
			$name = "Karla";
			$name = "The name is : " . $name;
		}
		
		givemeName();
		
		echo $name;
	
	?>
	
    
</body>
</html>