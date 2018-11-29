<?php
error_reporting(0);
include "conexion.php";

$accion = $_POST["accion"];
$accion2 = $_POST["accion2"];

if ($accion == "+"){

	$nombre = $_POST ["nombre"];
	$codigo = $_POST ["codigo"];
	$localidad = $_POST ["localidad"];
	$estado = $_POST ["estado"];
	$idFamiliaFPP = $_POST ["idFamiliaFPP"];
	$municipio = $_POST ["municipio"];
	$curp = $_POST ["curp"];
	$numeroDeFolio = $_POST ["numeroDeFolio"];
	$nombretitular = $_POST ["nombretitular"];
	$sexo = $_POST ["sexo"];
	$fechaDeNacimiento= $_POST ["fechaDeNacimiento"];
	$nombreConyuge = $_POST ["nombreConyuge"];
	$productorGuia= $_POST ["productorGuia"];
	$anioDeIncorporacion= $_POST ["anioDeIncorporacion"];


if($nombre           == true and
  $codigo            == true and 
  $localidad         == true and 
  $estado            == true and
  $idFamiliaFPP      == true and
  $municipio         == true and
  $curp              == true and 
  $sexo              == true and 
  $fechaDeNacimiento == true and 
  $nombreConyuge     == true and 
  $productorGuia     == true and 
  $anioDeIncorporacion== true          	              	     	       
){

		$sql = "insert into productores(
		nombre, 
		codigo, 
		localidad, 
		estado, 
		idFamiliaFPP, 
		municipio, 
		curp, 
		numeroFolio,
		nombreTitular, 
		sexo, 
		fechaNacimiento, 
		nombreConyuge, 
		productorGuia, 
		anioIncorporacion)
	values 
	   ('$nombre',
		'$codigo',
		'$localidad',
		'$estado',
		'$idFamiliaFPP',
		'$municipio',
		'$curp',
		'$numeroDeFolio',
		'$nombretitular',
		'$sexo',
		'$fechaDeNacimiento',
		'$nombreConyuge',
		'$productorGuia',
		'$anioDeIncorporacion'
	)";


$conex->query($sql);
	echo "OK";
}

else{

	echo" Rellena todos los campos ";
}
}








// if ($accion == "+"){

// 	$nombre = $_POST ["nombre"];
// 	echo "<script> alert ('si existe en la base de datos'+ '".$row["id"]."');</script>";
//  $sql = "select * from productores where nombre = ".$nombre;

// 	$tbl = $conex->query($sql);
// 	while ($row = $tbl->fetch_array()){


// echo "<script> alert ('si existe en la base de datos'+ '".$row["id"]."');</script>";
	 
// 	}




// }











if ($accion =="mostrar"){
	$sql = "select * from productores order by id";
	$tbl = $conex->query($sql);

	echo"<center>
	<table id='tab1'  class='table table-condensed'>
		 <thead class='thead-dark '>
			<tr  id='filatituloss'>
				<th  class='celdasTitulo'>N.</th>
				<th colspan='1' class='celdasTitulo'>Detalles</th>
				<th class='celdasTitulo'>Nombre</th>
				<th class='celdasTitulo'>Codigo</th>
				<th class='celdasTitulo'>localidad</th>
				<th class='celdasTitulo'>Estado</th>
				<th class='celdasTitulo'>id Familia FPP</th>
				<th class='celdasTitulo'>Municipio</th>
				<th class='celdasTitulo'>Curp</th>
				<th class='celdasTitulo'>Numero de folio</th>
				<th class='celdasTitulo'>Nombre Titular</th>
				<th class='celdasTitulo'>Sexo</th>
				<th class='celdasTitulo'>Fecha de nacimiento</th>
				<th class='celdasTitulo'>Nombre conyuge</th>
				<th class='celdasTitulo'>Productor guia</th>
				<th class='celdasTitulo'>Año de incorporacion</th>
			</tr>
		</thead>";

		while ($row = $tbl->fetch_array()){
		echo"
		<tr>
			<td  class='celdasCont'>
				".$row["id"]."
			</td>

			<td class='celdasCont'>
				<button id='btnE' type='button' class='btn btn-danger' onclick = 'eliminar(".$row["id"].")'>
					Eliminar
				</button>
			
				
			
				<form action='productor.php' method='post'>
 					<input type='hidden' name='id' value='".$row["id"]."' />
 					<input type='hidden' name='nombre' value='".$row["nombre"]."' />
 					<input  id='btnver' class='btn btn-info' type='submit' value='Ver'/>
				</form>
			</td>


			<td class='celdasCont'>".$row["nombre"]."</td>
			<td class='celdasCont'>".$row["codigo"]."</td>
			<td class='celdasCont'>".$row["localidad"]."</td>
			<td class='celdasCont'>".$row["estado"]."</td>
			<td class='celdasCont'>".$row["idFamiliaFPP"]."</td>
			<td class='celdasCont'>".$row["municipio"]."</td>
			<td class='celdasCont'>".$row["curp"]."</td>
			<td class='celdasCont'>".$row["numeroFolio"]."</td>
			<td class='celdasCont'>".$row["nombreTitular"]."</td>
			<td class='celdasCont'>".$row["sexo"]."</td>
			<td class='celdasCont'>".$row["fechaNacimiento"]."</td>
			<td class='celdasCont'>".$row["nombreConyuge"]."</td>
			<td class='celdasCont'>".$row["productorGuia"]."</td>
			<td class='celdasCont'>".$row["anioIncorporacion"]."</td>
		</tr>";
}
echo "</table></center>";
}



if ($accion2 =="mostrart"){
	$sql = "select * from productores order by id";
	$tbl = $conex->query($sql);

	echo"<center>
	<table id='tab1'  class='table table-condensed'>
		 <thead class='thead-dark '>
			<tr  id='filatitulos'>
				<th  class='celdasTitulo'>N.</th>
				<th colspan='1' class='celdasTitulo'>Detalles</th>
				<th class='celdasTitulo'>Nombre</th>
				<th class='celdasTitulo'>Codigo</th>
				<th class='celdasTitulo'>localidad</th>
				<th class='celdasTitulo'>Estado</th>
				<th class='celdasTitulo'>id Familia FPP</th>
				<th class='celdasTitulo'>Municipio</th>
				<th class='celdasTitulo'>Curp</th>
				<th class='celdasTitulo'>Numero de folio</th>
				<th class='celdasTitulo'>Nombre Titular</th>
				<th class='celdasTitulo'>Sexo</th>
				<th class='celdasTitulo'>Fecha de nacimiento</th>
				<th class='celdasTitulo'>Nombre conyuge</th>
				<th class='celdasTitulo'>Productor guia</th>
				<th class='celdasTitulo'>Año de incorporacion</th>
			</tr>
		</thead>";

		while ($row = $tbl->fetch_array()){
		echo"
		<tr>
			<td  class='celdasCont'>
				".$row["id"]."
			</td>

			<td class='celdasCont'>
				<button id='btnE' type='button' class='btn btn-danger' onclick = 'eliminar(".$row["id"].")'>
					Eliminar
				</button>

				

				<form action='productor.php' method='post'>
 					<input type='hidden' name='id' value='".$row["id"]."' />
 					<input type='hidden' name='nombre' value='".$row["nombre"]."' />
 					<input  id='btnver' class='btn btn-info' type='submit' value='Ver'/>
				</form>
			</td>


			<td class='celdasCont'>".$row["nombre"]."</td>
			<td class='celdasCont'>".$row["codigo"]."</td>
			<td class='celdasCont'>".$row["localidad"]."</td>
			<td class='celdasCont'>".$row["estado"]."</td>
			<td class='celdasCont'>".$row["idFamiliaFPP"]."</td>
			<td class='celdasCont'>".$row["municipio"]."</td>
			<td class='celdasCont'>".$row["curp"]."</td>
			<td class='celdasCont'>".$row["numeroFolio"]."</td>
			<td class='celdasCont'>".$row["nombreTitular"]."</td>
			<td class='celdasCont'>".$row["sexo"]."</td>
			<td class='celdasCont'>".$row["fechaNacimiento"]."</td>
			<td class='celdasCont'>".$row["nombreConyuge"]."</td>
			<td class='celdasCont'>".$row["productorGuia"]."</td>
			<td class='celdasCont'>".$row["anioIncorporacion"]."</td>
		</tr>";
}
echo "</table></center>";
}








  ?>