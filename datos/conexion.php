<?php

class conexion{
	function conectar(){
		return mysqli_connect("localhost","klvst3r","milord");
	}
}

$cnn = new conexion();
if($cnn->conectar()){
	echo "Conectado";
}else {
	echo "No conectado";
}

?>