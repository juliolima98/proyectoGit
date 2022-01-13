<?php require_once "mante.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Nuevo</title>
</head>
<body>
	<form method="post" action="#">
		Nombre de producto: <input type="text" name="nombre"><br>
		Precio de producto: <input type="text" name="precio"><br>
		<input type="submit" name="" value="Agregar">
		<input type="reset" name="" value="Cancelar">
		<a href="producto.php">Volver</a>
	</form>

	<?php
	if(isset($_POST['nombre']) && isset($_POST['precio'])){
		$nombre=$_POST['nombre'];
		$precio=$_POST['precio'];
		$ob=new Mante();
		$r=$ob->agregar($nombre,$precio);
	}


	?>

</body>
</html>