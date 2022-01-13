<?php require_once "conex.php";
	class Mante extends Conex{
		function __construct(){
			parent::__construct();
		}

		function mostrar(){
			$res=$this->con->query("select * from producto");
			return $res;
		}

		function eliminar($id){
			$res=$this->con->query("delete from producto where idproducto='$id'");
			return $res;
		}

		function agregar($nombre,$precio){
			$res=$this->con->query("insert into producto values('','$nombre','$precio')");
			return $res;
		}

		function modificar($id,$nombre,$precio){
			$res=$this->con->query("update producto set nombre_producto='$nombre', set precio='$precio' where idproducto='$id'");
			return $res;
		}
	}