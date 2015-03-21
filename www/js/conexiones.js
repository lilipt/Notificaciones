$(document.body).ready(inicio)

function inicio(){
$("#registrarAdministrador").click(agregarAdministrador)
$("#registrarUsuario").click(agregarUsuario)
$("#registrarCategoria").click(agregarCategoria)
$("#registraInstitucion").click(agregarInstitucion)
$("#admin").load("Php/muestraAdmin.php")
$("#categoria").load("Php/muestraCategorias.php")
$("#registrarInstitucion").click(agregarInstitucion)

}

function agregarAdministrador(){
var datos = $("#formAdministrador").serialize()

 
$.ajax({
     url:"Php/registroAdministrador.php",
	type: "Post",
	data: datos,
	datatype:"html",
	success:function(dato){
    if(dato == 1){
  alert("Se agrego correctamente")
  window.location="registroadministrador.html"
}else{
	   alert("Aministrador no agregado")
	   }}


})
	
}

function agregarUsuario(){
	 var datos=$("#formUsuario").serialize()
	 $.ajax({
		 url: "Php/registroUsuario.php",
		 data: datos,
		 type:"POST",
		 dataType:"html",
		 success: function(dato){
			 if(dato == 1){
				 alert("Usuario agregado")
				 window.location= "registro.html"
				 }else{
					 alert("Usuario no agregado")
					 }
			 }
		 })
	
	}

function agregarCategoria(){
	var datos= $("#formCategoria").serialize()
	$.ajax({
		url: "Php/registroCategoria.php",
		data: datos,
		type:"POST",
		dataType:"html",
		success: function(datos){
			if(datos == 1){
				alert("Categoria agregada")
				}else{
				
				alert("No se agrego la categoria")
				}
			}
		})
	
	}
function agregarInstitucion(){
	var datos=$("#formInstitucion").serialize()
	$.ajax({
  url:"Php/registroInstitucion.php",
  data: datos,
  type: "post",
  dataType: "html",
  success: function(dato){
   if(dato==1){
alert("Institucion agregada")

   }else{
   	alert("Error al agregar")
   }

  }

	})
   
		
	
	}