<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Arrays</title>
</head>
<body>
	<h1>Array Ejemplos</h1>
	<hr>
	<?php
	//Array Predefinido
		$datos = array('Luis',16,'M', 783900000);

		//print var_dump($datos);

		//print"<br>";

		//print $datos[2];
		print"<br>";

		for ($i=0; $i < count($datos); $i++) { 
			print $datos[$i]."<br>";
		}
	?>

	<?php
	//Array Asociativo
		$persona = array('Nombre' => 'Carlos' , 'Edad' => 26, 'Genero' => 'Masculino' );
		//print var_dump($persona);
		print"<br>";

		//print $persona['Nombre'];
		//print"<br>";

		foreach ($persona as $indice => $dato) {
			print $persona[$indice]."<br>";
		}
	?>
</body>
</html>