<?php
include "conexion.php";

//Instalar la BD
function crearDb(){
	$cnn = new conexion();

	$cnn = $cnn->conectar();

	$sql = "CREATE DATABASE loginBootstrap";
	
	//Ejecutar la consulta y se comprueba
	if(mysqli_query($cnn, $sql)){
		echo "Consulta Correcta";
	}
	//Cerramos la c onexion
	mysqli_close($cnn);
}

function crearTablas(){
	$cnn = new conexion();
	$cnn = $cnn->conectar();
	mysqli_select_db($cnn, "loginBootstrap");

	$sql = "CREATE TABLE usuarios(
		id INT(11) NOT NULL AUTO_INCREMENT,
		usuario CHAR(50), 
		contrasena char(50),
		PRIMARY KEY(id)
	)";
	if(mysqli_query($cnn, $sql)){
		echo "Tabla creada";
	}
	mysqli_close($cnn);
}

/*crearDb();
crearTablas();*/



?>