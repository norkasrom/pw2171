<?php
	require("utilerias.php");
	function alta(){
		$respuesta=false;
		$conexion=conecta();
		$u=GETSQLValueString($_GET["usuario"],"text");
		$c=GETSQLValueString(md5($_GET["clave"]),"text");
		$consulta=sprintf("select usuario,clave from usuarios where usuario=%s and clave=%s Limit 1",$u $c);
		$resultado=mysql_query($consulta);
		if(mysql_num_rows($resultado)>0)
		{
			$respuesta=true;

		}
		$salidaJSON = array('respuesta'=>$respuesta);
		print(json_encode($salidaJSON));
	}
	//Menu principal
	$opcion=$_GET["opcion"];
		switch ($opcion) {
			case 'alta':
				alta();
				break;
			
			default:
				
				break;
		}
?>