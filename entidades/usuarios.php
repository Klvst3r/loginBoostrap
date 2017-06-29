<?php
//Se crea el mapeo de las etidades, por cada una de las columnas existentes se crea una propiedad

class usuarios{
	//Se crea la propiedad
	public $id;

	//Sus getters y setters de la propiedad
	function get_id(){
		//al obtenerse nos retorne la pripiedad id de la clase
		return $this->id;
	}

	function set_id($id){
		//Que nuestra propiedad id sea igual al paprametro que se pasara por la funcion con el mismo nombre
		$this->id = $id;
	}

	public $usuario;
	function get_usuario(){
		return $this->usuario;
	}

	function set_usuario($usuario){
		$this->usuario = $usuario;
	}

	public $contrasena;
	function get_contrasena(){
		return $this->contrasena;
	}

	function set_contrasena($contrasena){
		$this->contrasena = $contrasena;
	} 
}

?>