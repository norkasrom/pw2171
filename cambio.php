<?php
include("utilerias.php");
$u=GetSQLValueString($_GET["txtUsuario"],"text");

print("<form action='guardaalta.php' method='post'>");
print("<input type='text' placeholder='usuario' name=txtUsuaio>");
print("<input type='text' placeholder='nombre' name=txtNombre>");
print("<input type='text' placeholder='clave' name=txtClave>");
print("<input type='text' placeholder='depto' name=txtDeptp>");
print("<input type='text' placeholder='vigencia' name=txtVigencia>");
print("<input type='submit' value='Guardar'>");
print("/from");
?>