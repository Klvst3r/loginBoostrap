<?php
include "../datos/usuariosDatos.php";

class usuariosControlador {
	function insertarUsuarios($usuario, $pass){
		$obt =  new usuariosDatos();
		return $obj->insertarUsuarios($usuarios, $pass);
	}
}

?>