$(document).ready(ini);

function ini(){
	//alert("iniciado");
	//AJAX por medio del boton
	$("#btnregistrar").click(enviarDatos);
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