<?php
include "../datos/usuariosDatos.php";

class usuariosControlador{
	function insertarUsuarios($usuario, $pass){
		$obj =  new usuariosDatos();
		return $obj->insertarUsuarios($usuario, $pass);
	}
}

?>