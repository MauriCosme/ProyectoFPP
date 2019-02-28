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
				<button id='btnE' type='button' class='btn btn-danger' data-toggle='modal' data-target='#SGelim' onclick ='SGeliminar(".$row["id"].",\"".$row["nombre"]."\")'>
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





if ($accion =="BuscarNom"){

	$nom = $_POST["nombre"];
	$sql = "select * from productores where nombre = '".$nom."'";
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


if ($accion =="BuscarCod"){

	$cod = $_POST["codigo"];
	$sql = "select * from productores where codigo = '".$cod."'";
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

if ($accion =="BuscarLoc"){

	$localidad = $_POST["localidad"];
	$sql = "select * from productores where localidad = '".$localidad."'";
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




if ($accion =="BuscarIdFam"){
	
	$idfa = $_POST["idFamilia"];

	$sql = "select * from productores where idFamiliaFPP = '".$idfa."'";
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






if ($accion =="VerPuntaje"){
	$ciclo = $_POST["ciclo"];
	$puntaje = $_POST["puntaje"];

	
	$sql ="select productores.nombre,ciclosproduccion.ciclo, ciclosproduccion.puntaje
	from productores inner join ciclosproduccion on ciclosproduccion.idProductor=productores.id where ciclo='".$ciclo."' and puntaje > ".$puntaje.";";
	$tbl = $conex->query($sql);

	echo"<center>
	<table id='tablapuntaje'  class='table table-condensed'>
		 <thead class='thead-dark '>
			<tr  id='filatituloss'>
		
				<th class='celdasTitulo'>Nombre</th>
				<th class='celdasTitulo'>Ciclo</th>
				<th class='celdasTitulo'>Puntaje</th>
			</tr>
		</thead>";

		while ($row = $tbl->fetch_array()){
		echo"
		<tr>
			
			<td class='celdasCont'>".$row["nombre"]."</td>
			<td class='celdasCont'>".$row["ciclo"]."</td>
			<td class='celdasCont'>".$row["puntaje"]."</td>
		</tr>";
}
echo "</table></center>";




}



if($accion=="-pro"){
	$id = $_POST["ide"];
	$sql ="delete from arbolessombra  where idProductor=".$id;
	$sql1 ="delete from beneficioseco  where idProductor=".$id;
	$sql2 ="delete from capacitaciones  where idProductor=".$id;
	$sql3 ="delete from ciclosproduccion  where idProductor=".$id;
	$sql4 ="delete from datospago where idProductor=".$id;
	$sql5 ="delete from equipo  where idProductor=".$id;
	$sql6 ="delete from eventos  where idProductor=".$id;
	$sql7 ="delete from imagenes  where idProductor=".$id;
	$sql8 ="delete from materialherramientas  where idProductor=".$id;
	$sql9 ="delete from materialvivero  where idProductor=".$id;
	$sql10 ="delete from paquetenutricion  where idProductor=".$id;
	$sql11 ="delete from paqueteplantascafe  where idProductor=".$id;
	$sql12 ="delete from paqueteprevencion  where idProductor=".$id;
	$sql13 ="delete from productores  where id=".$id;
	

	
	$conex->query($sql);
	$conex->query($sql1);
	$conex->query($sql2);
	$conex->query($sql3);
	$conex->query($sql4);
	$conex->query($sql5);
	$conex->query($sql6);
	$conex->query($sql7);
	$conex->query($sql8);
	$conex->query($sql9);
	$conex->query($sql10);
	$conex->query($sql11);
	$conex->query($sql12);
	$conex->query($sql13);
	echo "OK";

	//echo"<script> alert('el id del eliminado es'+'".$id."');</script>";
}







if ($accion =="mostrarTabOc"){
	$sql = "select * from productores order by id";
	$tbl = $conex->query($sql);

	echo"<center>
	<table id='tab2'  class='table table-condensed'>
		 <thead class='thead-dark '>
			<tr  id='filatituloss'>
				<th  class='celdasTitulo'>N.</th>
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