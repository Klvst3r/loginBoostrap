$(document).ready(ini);

function ini(){
	//alert("iniciado");
	//AJAX por medio del boton
	$("#btnregistrar").click(enviarDatos);
}
function enviarDatos(){
	$.ajax({
		url:"insertar.php",
		success:function(result){
			alert(result); 
		}
	});
}