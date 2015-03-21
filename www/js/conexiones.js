$(document).ready(inicio)

function inicio(){
$("#registrarAdministrador").click(agregarAdministrador)

}
function agregarAdministrador(){
var datos = $("#formAdministrador").serialize
 
$.ajax({
     url:"Php/registroAdministrador.php",
	typ: "Post",
	data: datos,
	datatype:"html",
	sucess:function(dato){
    if(dato == 2){
  alert("Se agrego correctamente")
}else{
	   alert("Aministrador no agregado")
	   }}


})
}