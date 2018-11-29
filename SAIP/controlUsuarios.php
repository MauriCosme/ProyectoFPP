<?php 
include "conexion.php";

$accion = $_POST["accion"];

if ($accion == "+"){
	$nombre = $_POST ["nombre"];
	$usuario = $_POST ["usuario"];
	$contrasenia = $_POST ["contrasenia"];

if($nombre == true and $usuario == true and $contrasenia == true){


	$sql = "insert into usuarios(nombre, usuario, contrasenia)
	values ('$nombre','$usuario','$contrasenia')";
	$conex->query($sql);
	echo "OK";
}

else{

	echo" Rellena todos los campos ";
}
}

















if($accion=="m"){

	$sql = "select * from usuarios order by id";
	$tbl = $conex->query($sql);

	echo"
<table id='tablaa' class='table table-hover' >
	
<TR>
	<th>id</th>
	<th>Nombre</th>
	<th>Usuario</th>
	<th>Contraseña</th>
	<th colspan='2'>Opciones</th>
</TR>
";

while ($row = $tbl->fetch_array()){
echo"
<TR>
	<td>".$row["id"]."</td>
	<td>".$row["nombre"]."</td>
	<td>".$row["usuario"]."</td>
	<td>".$row["contrasenia"]."</td>
	<td><button type='button' class='btn btn-danger' onclick = 'eliminar(".$row["id"].")'>Eliminar</button></td>
	<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#miModal' onclick = 'editar(".$row["id"].",
								\"".$row['nombre']."\",
								\"".$row['usuario']."\",
								\"".$row['contrasenia']
								."\"
								
								)'>Editar</button></td>
</TR>";
}
echo"
</table>
";

}

















if($accion=="-"){
	$id = $_POST["id"];
	$sql ="delete from usuarios where id=".$id;
	$conex->query($sql);
	echo "OK";
}






if ($accion == "a") {
	
	$id = $_POST ["id"];
	$nombre = $_POST ["nombre"];
	$usuario = $_POST ["usuario"];
	$contrasenia = $_POST ["contrasenia"];


$sql = "update usuarios set id='".$id."', nombre='".$nombre."', usuario='".$usuario."', contrasenia='" .$contrasenia."'
	where id='".$id."'";

	$conex->query($sql);
	
	echo "OK";
}




 ?>