<?php require_once "parametros.php";
	class Conex{
		public $con;

		function __construct(){
			$this->con=new mysqli(SERVER,USER,PASSWORD,BASE);
			$this->con->set_charset(CHAR);
		}
	}