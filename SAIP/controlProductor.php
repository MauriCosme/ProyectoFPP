 <?php
	include "conexion.php";
 	$accion = $_POST["accion"];
 	$id = $_POST["id"];




if ($accion =="mostrar"){
	$sql = "select * from productores where id = ".$id;
	$tbl = $conex->query($sql);
		while ($row = $tbl->fetch_array()){
		echo"<button id='editar' data-toggle='modal' data-target='#EditarDatosG' onclick = 'editarDG(".$row["id"].",

											\"".$row['nombre']."\",
											\"".$row['codigo']."\",
											\"".$row['localidad']."\",
											\"".$row['estado']."\",
											\"".$row['idFamiliaFPP']."\",
											\"".$row['municipio']."\",
											\"".$row['curp']."\",
											\"".$row['numeroFolio']."\",
											\"".$row['nombreTitular']."\",
											\"".$row['sexo']."\",
											\"".$row['fechaNacimiento']."\",
											\"".$row['nombreConyuge']."\",
											\"".$row['productorGuia']."\",
											\"".$row['anioIncorporacion']
											."\"

						)' >Editar</button>".

		

			" <br><br> <div class='preg'>".
				"<strong>Nombre productor: </strong>
				<input readonly='readonly' id='inputsform'  value='".$row["nombre"]."'>".
			"</div>".	

			"<div class='preg'>".
				"<strong>Codigo: </strong>
				<input readonly='readonly' id='inputsform' value='".$row["codigo"]."'>".
			"</div>".
			
			"<div class='preg'>".
				"<strong>Localidad: </strong>
				<input readonly='readonly' id='inputsform' value='".$row["localidad"]."'>".
			"</div>".
			
			"<div class='preg'>".
				"<strong>Estado: </strong>
				<input readonly='readonly' id='inputsform' value='".$row["estado"]."'>".
			"</div>".
			

			"<div class='preg'>".
				"<strong>Id Familia FPP: </strong>
				<input readonly='readonly' id='inputsform' value='".$row["idFamiliaFPP"]."'>".
			"</div>".
			
			"<div class='preg'>".
				"<strong>Municipio: </strong>
				<input readonly='readonly' id='inputsform' value='".$row["municipio"]."'>".
			"</div>".
			
			"<div class='preg'>".
				"<strong>Curp: </strong>
				<input readonly='readonly' id='inputsform' value='".$row["curp"]."'>".
				"</div>".
			

			"<div class='preg'>".
				"<strong>Numero de folio: </strong>
				<input readonly='readonly' id='inputsform' value='".$row["numeroFolio"]."'>".
			"</div>".
		
			"<div class='preg'>".
				"<strong>Nombre titular: </strong>
				<input readonly='readonly' id='inputsform' value='".$row["nombreTitular"]."'>".
			"</div>".
			
			"<div class='preg'>".
				"<strong>Sexo: </strong>
				<input readonly='readonly' id='inputsform' value='".$row["sexo"]."'>".
			"</div>".

			"<div class='preg'>".
				"<strong>Fecha de nacimiento: </strong>
				<input readonly='readonly' id='inputsform' value='".$row["fechaNacimiento"]."'>".
			"</div>".
			
			"<div class='preg'>".
				"<strong>Nombre conyuge: </strong>
				<input readonly='readonly' id='inputsform' value='".$row["nombreConyuge"]."'>".
			"</div>".
		
			"<div class='preg'>".
				"<strong>Productor Guia: </strong>
				<input readonly='readonly' id='inputsform' value='".$row["productorGuia"]."'>".
			"</div>".
			
			"<div class='preg'>".
				"<strong>Año de incorporacion: </strong>
				<input readonly='readonly' id='inputsform' value='".$row["anioIncorporacion"]."'>
				</div>";		
}
}



	

if ($accion == "a") {
 		
 		$id = $_POST["id"];
 		$nombre = $_POST["nombre"];
 		$codigo = $_POST["codigo"];
 		$localidad = $_POST["localidad"];
 		$estado = $_POST["estado"];
 		$idFamiliaFPP = $_POST["idFamiliaFPP"];
 		$municipio = $_POST["municipio"];
 		$curp = $_POST["curp"];
 		$numeroFolio = $_POST["numeroFolio"];
 		$nombreTitular = $_POST["nombreTitular"];
 		$sexo = $_POST["sexo"];
 		$fechaNacimiento = $_POST["fechaNacimiento"];
 		$nombreConyuge = $_POST["nombreConyuge"];
 		$productorGuia = $_POST["productorGuia"];
 		$anioIncorporacion = $_POST["anioIncorporacion"];

 		$sql = "update productores set
 		 id='".$id."',
 		 nombre='".$nombre."',
 		 codigo='".$codigo."',
 		 localidad='" .$localidad."',
 		 estado='".$estado."',
 		 idFamiliaFPP='".$idFamiliaFPP."',
 		 municipio='".$municipio."',
 		 curp='".$curp."',
 		 numeroFolio='".$numeroFolio."',
 		 nombreTitular='".$nombreTitular."',
 		 sexo='".$sexo."',
 		 fechaNacimiento='".$fechaNacimiento."',
 		 nombreConyuge='".$nombreConyuge."',
 		 productorGuia='".$productorGuia."',
 		 anioIncorporacion='".$anioIncorporacion."'
			where id='".$id."'";
			$conex->query($sql);
			echo "OK";
 	}





if ($accion == "aDP") {
 		
 		$id = $_POST["id"];
 		$folioPadron = $_POST["folioPadron"];
 		$folioPadronPrestado = $_POST["folioPadronPrestado"];
 		$nombreProductor = $_POST["nombreProductor"];
 		$institucionBancaria = $_POST["institucionBancaria"];
 		$titularCuenta = $_POST["titularCuenta"];
 		
 		$sql = "update datosPago set
 		 id='".$id."',
 		 folioPadron='".$folioPadron."',
 		 folioPadronPrestado='".$folioPadronPrestado."',
 		 nombreProductor='" .$nombreProductor."',
 		 institucionBancaria='".$institucionBancaria."',
 		 titularCuenta='".$titularCuenta."'
 		 
			
			where id='".$id."'";

			$conex->query($sql);
	
			echo "OK";
 		
 	}




if ($accion == "+DP"){
		$id = $_POST["id"];
 		$folioPadron = $_POST["folioPadron"];
 		$folioPadronPrestado = $_POST["folioPadronPrestado"];
 		$nombreProductor = $_POST["nombreProductor"];
 		$institucionBancaria = $_POST["institucionBancaria"];
 		$titularCuenta = $_POST["titularCuenta"];

if($folioPadron == true and $institucionBancaria == true and $titularCuenta == true){


	$sql = "insert into datosPago (folioPadron, folioPadronPrestado, nombreProductor, institucionBancaria, titularCuenta, idProductor)
						   values ('$folioPadron','$folioPadronPrestado','$nombreProductor','$institucionBancaria','$titularCuenta','$id')";
	$conex->query($sql);
	echo "OK";
}

else{

	echo"<script> alert('Rellena todos los campos ');</script>";
	echo "OK";
}
}





if ($accion== "verCapacitaciones") {


$sql = "SELECT * FROM capacitaciones where idProductor='".$id."'";
	$tbl = $conex->query($sql);

	echo "<button id='btnNuevoCap' data-toggle='modal' data-target='#modalAgregarCAP' onclick='cambiarTituloModalCAP(".$id.")'>Nuevo</button><br><br><br>";
	echo "<table id='tablaCapacit' class='table table-condensed'>
	<thead class='thead-dark '>
		<tr id='filatitulos'>
			<th>No.</th>
			<th>Taller</th>
			<th>Facilitador</th>
			<th>Duración</th>
			<th>Fecha</th>
			<th colspan='2'>Opciones</th>
		</tr>
	</thead>
	";
	while ($row = $tbl->fetch_array()){
echo"
<TR>
	<td>".$row["id"]."</td>
	<td>".$row["taller"]."</td>
	<td>".$row["facilitador"]."</td>
	<td>".$row["duracion"]."</td>
	<td>".$row["fecha"]."</td>
	<td><button type='button' class='btn btn-danger' onclick = 'eliminarCAP(".$row["id"].")'>Eliminar</button></td>
	<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modalAgregarCAP' onclick = 'editarDCAP(".$row["id"].",
								\"".$row['taller']."\",
								\"".$row['facilitador']."\",
								\"".$row['duracion']."\",
								\"".$row['fecha']
								."\"
								
								)'>Editar</button></td>
</TR>";
}
echo"
</table>
";
}



if ($accion == "+DCAP"){
		$id3 = $_POST["id"];
 		$taller = $_POST["taller"];
 		$facilitador = $_POST["facilitador"];
 		$duracion = $_POST["duracion"];
 		$fecha = $_POST["fecha"];
 		

if($taller == true and $facilitador == true and $duracion == true){


	$sql = "insert into capacitaciones (taller, facilitador, duracion, fecha, idProductor)
						   values ('$taller','$facilitador','$duracion','$fecha','$id3')";
	$conex->query($sql);
	echo "OK";
}

else{

	echo"<script> alert('Rellena todos los campos para poder agregar un taller');</script>";
	echo "OK";
}
}




if ($accion == "aDCAP") {
 		$id3 = $_POST["id"];
 		$taller = $_POST["taller"];
 		$facilitador = $_POST["facilitador"];
 		$duracion = $_POST["duracion"];
 		$fecha = $_POST["fechaTall"];
 		
 		$sql = "update capacitaciones set
 		 id='".$id3."',
 		 taller='".$taller."',
 		 facilitador='".$facilitador."',
 		 duracion='" .$duracion."',
 		 fecha='".$fecha."'
 
			where id='".$id3."'";

			$conex->query($sql);
	
			echo "OK";
 		
 	}



if($accion=="-CAP"){
	$id = $_POST["id"];
	$sql ="delete from capacitaciones where id=".$id;
	$conex->query($sql);
	echo "OK";
}





if ($accion== "verNutricion") {


$sql = "SELECT * FROM paquetenutricion where idProductor='".$id."'";
	$tbl = $conex->query($sql);

	echo "<button id='btnNuevoCap' data-toggle='modal' data-target='#modalAgregarNutricion' onclick='cambiarTituloModalNut(".$id.")'>Nuevo</button><br><br><br>";
	echo "<table id='tablaCapacit' class='table table-condensed'>
	<thead class='thead-dark '>
		<tr id='filatitulos'>
			<th>No.</th>
			<th>Tipo de producto</th>
			<th>Año</th>
			<th>Cantidad</th>
			<th colspan='2'>Opciones</th>
		</tr>
	</thead>
	";
	while ($row = $tbl->fetch_array()){
echo"
<TR>
	<td>".$row["id"]."</td>
	<td>".$row["tipo"]."</td>
	<td>".$row["anio"]."</td>
	<td>".$row["cantidad"]."</td>
	<td><button type='button' class='btn btn-danger' onclick = 'eliminarNut(".$row["id"].")'>Eliminar</button></td>
	<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modalAgregarNutricion' onclick = 'editarNut(".$row["id"].",
								\"".$row['tipo']."\",
								\"".$row['anio']."\",
								\"".$row['cantidad']."\"

								
								)'>Editar</button></td>
</TR>";
}
echo"
</table>
";
}





if ($accion == "+Nut"){
		$NutId = $_POST["id"];
 		$NutTipo = $_POST["tipo"];
 		$NutAño = $_POST["anio"];
 		$NutCantidad = $_POST["cantidad"];

 		if($NutTipo == true and $NutAño == true and $NutCantidad == true){

	$sql = "insert into paquetenutricion (tipo, anio, cantidad, idProductor)
						   values ('$NutTipo','$NutAño','$NutCantidad','$NutId')";
	$conex->query($sql);
	echo "OK";
}
else{

	echo"<script> alert('Rellena todos los campos para poder agregar un paquete de nutrición');</script>";
	echo "OK";
}
}



if ($accion == "aNut") {				//para actualizar utilizamos el id del registro de la tabla no del usuario
 		$idNut = $_POST["id"];
 		$tipo = $_POST["tipo"];
 		$anio = $_POST["anio"];
 		$cantidad = $_POST["cantidad"];
 		
 		
 		$sql = "update paquetenutricion set
 		 id='".$idNut."',
 		 tipo='".$tipo."',
 		 anio='".$anio."',
 		 cantidad='" .$cantidad."'
 
			where id='".$idNut."'";

			$conex->query($sql);
	
			echo "OK";
 		
 	}


if($accion=="-Nut"){
	$id = $_POST["id"];
	$sql ="delete from paquetenutricion where id=".$id;
	$conex->query($sql);
	echo "OK";
}




if ($accion== "verPrevencion") {


$sql = "SELECT * FROM paqueteprevencion where idProductor='".$id."'";
	$tbl = $conex->query($sql);

	echo "<button id='btnNuevoCap' data-toggle='modal' data-target='#modalAgregarPrevencion' onclick='cambiarTituloModalPrev(".$id.")'>Nuevo</button><br><br><br>";
	echo "<table id='tablaCapacit' class='table table-condensed'>
	<thead class='thead-dark '>
		<tr id='filatitulos'>
			<th>No.</th>
			<th>Tipo de producto</th>
			<th>Año</th>
			<th>Cantidad</th>
			<th colspan='2'>Opciones</th>
		</tr>
	</thead>
	";
	while ($row = $tbl->fetch_array()){
echo"
<TR>
	<td>".$row["id"]."</td>
	<td>".$row["tipo"]."</td>
	<td>".$row["anio"]."</td>
	<td>".$row["cantidad"]."</td>
	<td><button type='button' class='btn btn-danger' onclick = 'eliminarPrev(".$row["id"].")'>Eliminar</button></td>
	<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modalAgregarPrevencion' onclick = 'editarPrev(".$row["id"].",
								\"".$row['tipo']."\",
								\"".$row['anio']."\",
								\"".$row['cantidad']."\"

								
								)'>Editar</button></td>
</TR>";
}
echo"
</table>
";
}


if ($accion == "+Prev"){
		$PrevId = $_POST["id"];
 		$PrevTipo = $_POST["tipo"];
 		$PrevAnio = $_POST["anio"];
 		$PrevCantidad = $_POST["cantidad"];


 		if($PrevTipo == true and $PrevAnio == true and $PrevCantidad == true){

	$sql = "insert into paqueteprevencion (tipo, anio, cantidad, idProductor)
						   values ('$PrevTipo','$PrevAnio','$PrevCantidad','$PrevId')";
	$conex->query($sql);
	echo "OK";
}
else{

	 echo"<script> alert('Rellena todos los campos para poder agregar un paquete de nutrición');</script>";
	 echo "OK";
}
}



if ($accion == "aPrev") {				//para actualizar utilizamos el id del registro de la tabla no del usuario
 		$idPrev = $_POST["id"];
 		$tipo = $_POST["tipo"];
 		$anio = $_POST["anio"];
 		$cantidad = $_POST["cantidad"];
 		
 		
 		$sql = "update paqueteprevencion set
 		 id='".$idPrev."',
 		 tipo='".$tipo."',
 		 anio='".$anio."',
 		 cantidad='" .$cantidad."'
 
			where id='".$idPrev."'";

			$conex->query($sql);
	
			echo "OK";
 		
 	}




if($accion=="-Prev"){
	$id = $_POST["id"];
	$sql ="delete from paqueteprevencion where id=".$id;
	$conex->query($sql);
	echo "OK";
}



if ($accion== "verCafe") {


$sql = "SELECT * FROM paqueteplantascafe where idProductor='".$id."'";
	$tbl = $conex->query($sql);

	echo "<button id='btnNuevoCap' data-toggle='modal' data-target='#modalAgregarCafe' onclick='cambiarTituloModalCafe(".$id.")'>Nuevo</button><br><br><br>";
	echo "<table id='tablaCapacit' class='table table-condensed'>
	<thead class='thead-dark '>
		<tr id='filatitulos'>
			<th>No.</th>
			<th>Variedad</th>
			<th>Año</th>
			<th>Cantidad</th>
			<th colspan='2'>Opciones</th>
		</tr>
	</thead>
	";
	while ($row = $tbl->fetch_array()){
echo"
<TR>
	<td>".$row["id"]."</td>
	<td>".$row["variedad"]."</td>
	<td>".$row["anio"]."</td>
	<td>".$row["cantidad"]."</td>
	<td><button type='button' class='btn btn-danger' onclick = 'eliminarCafe(".$row["id"].")'>Eliminar</button></td>
	<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modalAgregarCafe' onclick = 'editarCafe(".$row["id"].",
								\"".$row['variedad']."\",
								\"".$row['anio']."\",
								\"".$row['cantidad']."\"

								
								)'>Editar</button></td>
</TR>";
}
echo"
</table>
";
}


if ($accion == "+Cafe"){
		$CafeId = $_POST["id"];
 		$CafeVariedad = $_POST["variedad"];
 		$CafeAnio = $_POST["anio"];
 		$CafeCantidad = $_POST["cantidad"];


 		if($CafeVariedad == true and $CafeAnio == true and $CafeCantidad == true){

	$sql = "insert into paqueteplantascafe (variedad, anio, cantidad, idProductor)
						   values ('$CafeVariedad','$CafeAnio','$CafeCantidad','$CafeId')";
	$conex->query($sql);
	echo "OK";
}
else{

	 echo"<script> alert('Rellena todos los campos para poder agregar un paquete de nutrición');</script>";
	 echo "OK";
}
}




if ($accion == "aCafe") {				//para actualizar utilizamos el id del registro de la tabla no del usuario
 		$idCafe = $_POST["id"];
 		$VariedadCafe = $_POST["variedad"];
 		$anioCafe = $_POST["anio"];
 		$cantidadCafe = $_POST["cantidad"];
 		
 		
 		$sql = "update paqueteplantascafe set
 		 id='".$idCafe."',
 		 variedad='".$VariedadCafe."',
 		 anio='".$anioCafe."',
 		 cantidad='" .$cantidadCafe."'
 
			where id='".$idCafe."'";

			$conex->query($sql);
	
			echo "OK";
 		
 	}


if($accion=="-Cafe"){
	$id = $_POST["id"];
	$sql ="delete from paqueteplantascafe where id=".$id;
	$conex->query($sql);
	echo "OK";
}


   ?>










   