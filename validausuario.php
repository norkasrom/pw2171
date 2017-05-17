<?php

	include("utilerias.php");
	function validausuario($usuario,$clave){
		//$conexion=mysql-connect("localhost","root","");
		//mysql_select_db("pw2171");
		$conexion=conecta();
		$usuario=GetSQLValueString($usuario,"text");
		$clave=GetSQLValueString(md5($clave),"text");
		$consulta=sprintf("select usuario,clave from usuarios where usuario=%s and clave=%s",$usuario,$clave);
		//$consulta="select usuario,clave from usuarios where usuario='".$usuario"and clave=".md5($clave)."' limit 1";
		$resultado=mysql_query($consulta);
		if(mysql_num_rows($resultado)>0)
		{
			print("<a herf='alta.php'> Alta </a> <br> ");
			print("<a> herf='baja.php'> Baja </a><br>");
			print("<a> herf='cambio.php'> Cambio</a><br>");
			print("<a> herf='consulta.php'> Consulta</a><br>");
			//print("Binvenido".$usuario.":)");
		}
			else
		{
			print("Usuario y/o contraseña incorrectos");

		}
	
	if(isset($_POST["txtUsuario"]) && isset($_POST["txtClave"]))
	{
	$usuario=$_POST["txtUsuario"];
	$clave=$_POST["txtClave"];
	validausuario($usuario,$clave);
	}
	else
	{
		print("<a herf='acceso.html'> valida tus datos <a/>");
	}
?>