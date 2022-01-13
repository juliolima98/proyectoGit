<?php require_once "mante.php";
$id=$_GET['id'];
$a=new Mante();
if($a->eliminar($id)){
	echo header("location:producto.php");
}