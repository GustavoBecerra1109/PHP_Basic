<?php
	/* Ejemplos cortos de operadores
	$num1 = 15;
	$num2 = 25;

	if ($num1 == $num2) {
		print "<h2>Son Iguales</h2>";
	}else{
		print "<h2>No son Iguales</h2>";
	}

	if ($num1 <> $num2) {
		print "<h3>Son Diferentes</h3>";
	}else{
		print "<h3>Son Iguales</h3>";
	}

	$usuario = "admin";
	$clave = 123;

	if ($usuario == "admin" and $clave == 123) {
		print "Bienvenido";
	} else {
		print "Error";
	}
	*/
	//Bucles muy básicos
	/*$color = "rojo";
	if ($color == "azul") {
		print "Es primario";
	} elseif ($color =="amarillo") {
			$color == "azul" 
		} elseif ($color == "rojo"){
				print "Es primario";
			}else{
				print "No es primario";
			}
			*/
	//SImplificando ejemplo
	$color = "rojo";
	if ($color == "azul" or $color == "amarillo" or $color == "rojo"){
		print "Es primario";
	}else{
		print "No es primario";
	}
?>