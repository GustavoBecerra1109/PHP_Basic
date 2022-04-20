<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ciclo For</title>
</head>
<body>
	<h1>Ejemplo</h1>
	<hr>

	<form action="">
		<label for="numero"></label>
		<input type="text" name="numero" placeholder="Ingerese numero">
		<input type="submit" value="Generar">
	</form>	
	<hr>


	<?php
		//validación
		if(isset( $_REQUEST['numero'])){
			
			$num = $_REQUEST['numero'];

		for ($i=1; $i<= 10; $i++) { 
			$t = $num * $i;
			print $num. " * ".$i. " = ".$t."<br>";
		}
	}else{
		print  "<h2> Ingrese un numero</h2>";
	}	
	?>

</body>
</html>