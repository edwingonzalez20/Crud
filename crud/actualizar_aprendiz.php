<?php
include 'funciones.php';
session_start();
$vide=$_SESSION=['ide1'];
$vnombres=$_SESSION=['nombres'];
$vapellidos=$_SESSION=['apellidos'];
$vdireccion=$_SESSION=['direccion'];
$vtelefono=$_SESSION=['telefono'];


$miconexion=mysqli_connect('localhost:3310','root','', 'sena');
$resultado=consulta($miconexion,"update aprendices set apre_nombres='{$vnombres}',apre_apellidos='{$vapellidos}',apre_direccion='{$vdireccion}',apre_telefono='{$vtelefono}' where Apre_id='{$vide}'");

if ($miconexion->affected_rows>0)
{
	echo "Actualizacion exitosa";
}

?>