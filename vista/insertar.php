<?php
include "../controlador/usuariosControlador.php";

	if(isset($_GET["usuario"]) || isset($_GET["pass"])){

	$usuariosCon = new usuariosControlador();
	//Validación de si existen los parametros enviados del formulario
	if($usuariosCon->insertarUsuarios($_GET["usuario"],$_GET["pass"])){
		echo "true";
	}else {
		echo "false";
	}
}else {
	echo "false"; 
}
?>