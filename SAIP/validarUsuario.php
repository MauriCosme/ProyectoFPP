<?php
session_start();
include "conexion.php";

$usuario =$_POST["usuario"];
$contrasenia =$_POST["contrasenia"];


$sql = "SELECT * FROM usuarios where usuario='".$usuario."' AND contrasenia='".$contrasenia."'";

$r= $conex-> query($sql);


if ($r->num_rows>0){
	$row = $r->fetch_array();
	$_SESSION["id"]=$row["id"];
	$_SESSION["usuario"]=$row["usuario"];
	echo "OK";

}
else{
	echo"NO EXISTE USUARIO";
}

$_SESSION['usuario']=$usuario;



?>