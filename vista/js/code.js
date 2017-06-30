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
			alert(result); 
		}, 
		data:{
			usuario:usuario,
			pass:pass
		},
		type:"GET"
	});
}