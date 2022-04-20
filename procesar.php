<?php
	//Puede recibir metodo GET Y POST(REQUEST)
	$usuario = $_REQUEST['usuario'];
	$clave = $_REQUEST['clave'];

	if ($usuario == "admin" && $clave == "1234") {
	 	echo "Bienvenido";
	 }else{
	 	echo "El usuario o la clave es incorrecta";
	 }
?>