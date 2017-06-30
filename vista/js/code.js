$(document).ready(ini);

function ini(){
	//alert("iniciado");
	//AJAX por medio del boton
	$("#btnregistrar").click(enviarDatos);
	$("#signin").click(validar);
}
function enviarDatos(){
	var usuario = $("#usuario").val();
	var pass = $("#pass").val();

	$.ajax({
		url:"insertar.php",
		success:function(result){
			//dalert(result); 
			if(result == "true"){
				$("#resultado").html("Se ha registrado el usuario correctamente");
			}else {
				$("#resultado").html("No se ha registrado el usuario");
			}
		}, 
		data:{
			usuario:usuario,
			pass:pass
		},
		type:"GET"
	});
}

function validar(){
	var usuario = $("#usuario").val();
	var pass = $("#pass").val();

	console.log(usuario);

	$.ajax({
		url:"validar.php",
		success:function(result){
			//dalert(result); 
			if(result == "true"){
				$("#resultado").html("<div style='background:green'>Acceso Correcto</div>");
			}else {
				$("#resultado").html("<div style='background:red'>No se pudo comprovar el usuario</div>");
			}
		}, 
		data:{
			usuario:usuario,
			pass:pass
		},
		type:"POST"
	});
}