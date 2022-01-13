<?php require_once "mante.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>producto</title>
</head>
<body>
	Vista<br>
	<form method="post" action="#">
		<a href="agregar.php">Agregar nuevo producto</a>
	</form>
	<?php
	$ob=new Mante();
	echo "<form method='post' action='#'>";
	echo "<table border='3px solid'>";
	echo "<tr><td>Codigo</td><td>Nombre</td><td>Precio</td></tr>";
	$r=$ob->mostrar();
	foreach ($r as $v){
		echo "<tr><td>".$v['idproducto']."</td><td>".$v['nombre_producto']."</td><td>".$v['precio']."</td><td>"."<a href='eliminar.php?id=".$v['idproducto']."'>Eliminar</td></tr>";
	}


	?>

</body>
</html>