<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Array multidimensional</title>
</head>
<body>
	<h1>Array Multidimensional</h1>
	<hr>

	<?php

		$alumnos = array(
			array('Nombre' =>'Carlos' , 'Edad' => 15, 'Genero'=> 'Masculino'),
			array('Nombre' => 'Cristina', 'Edad' => 16, 'Genero' => 'Femenino'),
			array('Nombre' => 'Manuel', 'Edad' => 17, 'Genero' => 'Masculino'),
			array('Nombre' => 'Lucia', 'Edad' => 14, 'Genero' => 'Femenino')
		);

		//print var_dump($alumnos);
		print "<hr>";

		print $alumnos[1]['Nombre'];
		
		print "<hr>";
		//Usando tablas
		print "<tables>";

		print "<table border = '1'>";

		print "<tr>
					<td><strong>Nombre</strong></td>
					<td><strong>Edad</strong></td>
					<td><strong>Genero</strong></td>

		</tr>";

		for ($i=0; $i < count($alumnos); $i++) { 

			print "<tr>";

			print "<td>".$alumnos[$i]['Nombre']."</td>";
			print "<td>".$alumnos[$i]['Edad']."</td>";
			print "<td>".$alumnos[$i]['Genero']."</td>";

			print"</tr>";

		}

		print "</tables>";
	?>
</body>
</html>