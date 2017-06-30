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
	} //function insertarUsuarios


/*$obj = new usuariosDatos();
if($obj->insertarUsuarios("uno","pass")){
	echo "Todo va bien";
}*/

	function validar($usuario, $pass){
		$cnn = new conexion();

		$con = $cnn->conectar();

		$usuarios = new usuarios();

		$usuarios->usuario = $usuario;
		$usuarios->contrasena = $pass;

		mysqli_select_db($con, "loginBootstrap");

		$sql = "SELECT * FROM usuarios WHERE usuario='".$usuarios->usuario."' and contrasena='".$usuarios->contrasena."'";

		$consulta = mysqli_query($con, $sql);
		
		$fila = mysqli_fetch_array($consulta);

		// se comrpueba solo que la fila no sea cero pero no que el usuario verdaderamente exista en la BD
	/*	if($fila > 0){
			return true;
		}else {
			return false;
		}*/
		if($fila > 0){
			if($fila["usuario"] == $usuarios->usuario && $fila["contrasena"] == $usuarios->contrasena){
				return true;
			}
		}else {
			return false;
		}

	}//function validar

}//Class

?>