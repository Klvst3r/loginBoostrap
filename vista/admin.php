<?php
session_start();
if(isset($_SESSION["usuario"]) && isset($_SESSION["pass"])){
	echo "Bienvenido";
}else{
	echo "<meta http-equip='refresh' content='0;url=index.php'";
} 

?>
