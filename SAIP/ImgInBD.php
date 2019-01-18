<?php 

include "conexion.php";
 	$accion = $_POST["accion"];

if ($accion == "+img"){
		$idProd = $_POST["id"];
		$nom = $_POST["nombre"];
		 $ext = $_POST["extension"];
		 $idCic = $_POST["idCiclo"];
		$ruta = "fotos/".$nom;
		 
 		
 		
	$sql = "insert into imagenes (nombre, extension, ruta, idCiclo, idProductor)
						  	values
						    	  ('$nom', '$ext', '$ruta', '$idCic','$idProd' )";
	$conex->query($sql);
	
	

}

 ?>