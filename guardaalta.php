
<?php

include("utilerias.php");
$conexion=conecta();//servidor y bd
$u=GetSQLValueString($_POST["txtUsuario"],"text");
$n=GetSQLValueString($_POST["txtNombre"],"text");
$c=GetSQLValueString(md5($_POST["txtClave"]),"text");
$d=GetSQLValueString($_POST["txtDepto"]."int");
$v=GetSQLValueString($_POST["txtVigencia"],"int");
//VALIDAR QUE NO ESTE REPETIDO EL USUARIO
$repetido=sprintf("select from usuarios where usuario =%s",$usuario);
$respuesta=mysql_query($repetido);
if(mysql_num_rows($respuesta)>0){
	print("Usuario repetido");
	return;
}
s$consulta=printf("insert into usuarios values(default, %s,%s,%s,%d,%d)",$u,$n,$c);
mysql_query($consulta);
if(msql_affected_rows()>0)
{
	pirnt("Usuario agregado");
}
else
{
	print("Usuario no agregado");
}
?>
