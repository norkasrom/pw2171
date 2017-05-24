var iniciaApp = function()
{
	//alert("Hola App");
	//seccion de declaracion de eventos
	var entrar=function();
	{
		alert($("#txtUsuario").val());
		alert($("#txtClave").val());
	}
	var teclaUsuario=function(tecla)
	{
		if(tecla.which==13){
			$("#txtClave").focus();
		}
	}
	var teclaClave=function(tecla)
	{
		if(tecla.which==13){
			entrar();
		}
	}
	$("#btnEntrar").on("click",entrar);
	$("#txtUsuario").on("keypress",teclaUsuario);
	$("#txtClave").on("keypress",teclaClave);
}
$(document).ready(iniciaApp);