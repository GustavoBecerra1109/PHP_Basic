<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Conditional Switch</title>
</head>
<body>
	<h1>Ejemplo</h1>

	<?php

	$dato = 7;
	switch ($dato) {
		case 1:
			print "<h2>Valor de la variale es 1</h2>";
			break;
		case 2:
			print "<h2>Valor de la variale es 2</h2>";
			break;
		case 3:
			print "<h2>Valor de la variale es 3</h2>";
			break;
		default:
			print "<h2>No se encuentra en los casos</h2>";
			break;
	}
	?>	
</body>
</html>