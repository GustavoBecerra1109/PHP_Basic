<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ciclos 2da parte</title>
</head>
<body>
	<h1>Ejemplo While</h1>
	<hr>

	<?php

	$dato = 10;
	while ($dato < 10) {
		print "Hola<br>";

		$dato++;
	}
	?>
	<hr>
	<h1>Ejemplo Do while</h1>
	<hr>

	<?php

		$dato = 10;

		do{
			print "Hola<br>";

			$dato++;

		}while ( $dato < 10);
	?>
</body>
</html>