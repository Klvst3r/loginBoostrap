<?php
include "../controlador/usuariosControlador.php";

if(isset($_POST["usuario"]) || isset($_POST["pass"])){
	//validacion y limpieza de campos vacios
	if(trim($_POST["usuario"]) == "" || trim($_POST["pass"]) == ""){
		echo "False - Campos vacios";
	}else{
		$usuariosCon = new usuariosControlador();
		//Validación de si existen los parametros enviados del formulario
		if($usuariosCon->validar($_POST["usuario"],$_POST["pass"])){
			echo "true"; //Usuario recuperado de la BD

			/*echo $_POST["usuario"]."<b r/>";
			echo $_POST["pass"]."<br />";*/
		}else {
			echo "False"; //Datos Incorrectos
		}
	}
}else {
	echo "false"; 
}
?>