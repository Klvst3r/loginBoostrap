<?php
//Se hace la parte logica de insertar

include "../entidades/usuarios.php";
include "conexion.php";

class usuariosDatos{
	function insertarUsuarios($usuario, $pass){
		$cnn = new conexion();

		$con = $cnn->conectar();

		$usuarios = new usuarios();

		$usuarios->usuario = $usuario;
		$usuarios->contrasena = $pass;

		mysqli_select_db($con, "loginBootstrap");

		$sql = "INSERT INTO usuarios (usuario, contrasena) VALUES('".$usuarios->usuario."', '".$usuarios->contrasena."')";

		if(mysqli_query($con, $sql)){
			return true;
		}else {
			return false;
		}
		mysqli_close($con);
	}
}

/*$obj = new usuariosDatos();
if($obj->insertarUsuarios("uno","pass")){
	echo "Todo va bien";
}*/



?>