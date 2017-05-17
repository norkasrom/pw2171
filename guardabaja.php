<?php

include("utilerias.php");
$conexion=conecta();//servidor y bd
$u=GetSQLValueString($_POST["txtUsuario"],"text");
$consulta=print("delete from usuarios where usuario=%s",$u);

mysql_query($consulta)
if(mysql_num_rows()>0){
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
