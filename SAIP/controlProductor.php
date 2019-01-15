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
	echo  "<div class='TitulosMensajes'><img src='img/nutri.png'  class='imgsInsumos'>&nbsp;&nbsp;&nbsp;&nbsp;<p id='TT'>Paquetes de Nutrición</p></div>";
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
	echo  "<div class='TitulosMensajes'><img src='img/prevencion.png'  class='imgsInsumos'>&nbsp;&nbsp;&nbsp;&nbsp;<p id='TT'>Paquetes de Prevención</p></div>";
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

	 echo"<script> alert('Rellena todos los campos para poder agregar un paquete de Prevención');</script>";
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
	echo  "<div class='TitulosMensajes'><img src='img/cafe.png'  class='imgsInsumos'>&nbsp;&nbsp;&nbsp;&nbsp;<p id='TT'>Plantas de café</p></div>";
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

	 echo"<script> alert('Rellena todos los campos para poder agregar una planta de cafe');</script>";
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




if ($accion== "verSombra") {
	$sql = "SELECT * FROM arbolessombra where idProductor='".$id."'";
		$tbl = $conex->query($sql);
		echo  "<div class='TitulosMensajes'><img src='img/sombra.png'  class='imgsInsumos'>&nbsp;&nbsp;&nbsp;&nbsp;<p id='TT'>Árboles de sombra</p></div>";
		echo "<button id='btnNuevoCap' data-toggle='modal' data-target='#modalAgregarSombra' onclick='cambiarTituloModalSombra(".$id.")'>Nuevo</button><br><br><br>";
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
				<td><button type='button' class='btn btn-danger' onclick = 'eliminarSombra(".$row["id"].")'>Eliminar</button></td>
				<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modalAgregarSombra' onclick = 'editarSombra(".$row["id"].",
									\"".$row['variedad']."\",
									\"".$row['anio']."\",
									\"".$row['cantidad']."\"
									)'>Editar</button></td>
			</TR>";
	}
		echo"</table>";
	}

	if ($accion == "+Sombra"){
		$SombraId = $_POST["id"];
 		$SombraVariedad = $_POST["variedad"];
 		$SombraAnio = $_POST["anio"];
 		$SombraCantidad = $_POST["cantidad"];
 		if($SombraVariedad == true and $SombraAnio == true and $SombraCantidad == true){
			$sql = "insert into arbolessombra (variedad, anio, cantidad, idProductor)
					values ('$SombraVariedad','$SombraAnio','$SombraCantidad','$SombraId')";
	$conex->query($sql);
	echo "OK";
}
else{

	 echo"<script> alert('Rellena todos los campos para poder agregar un arbol de sombra');</script>";
	 echo "OK";
}
}

if ($accion == "aSombra") {				//para actualizar utilizamos el id del registro de la tabla no del usuario
	$idSombra = $_POST["id"];
	$VariedadSombra = $_POST["variedad"];
	$anioSombra = $_POST["anio"];
	$cantidadSombra = $_POST["cantidad"];
	
	$sql = "update arbolessombra set
	 id='".$idSombra."',
	 variedad='".$VariedadSombra."',
	 anio='".$anioSombra."',
	 cantidad='" .$cantidadSombra."'

	   where id='".$idSombra."'";

	   $conex->query($sql);

	   echo "OK";
	
}


if($accion=="-Sombra"){
	$id = $_POST["id"];
	$sql ="delete from arbolessombra where id=".$id;
	$conex->query($sql);
	echo "OK";
}

if ($accion== "verMaterial") {
	$sql = "SELECT * FROM materialherramientas where idProductor='".$id."'";
		$tbl = $conex->query($sql);
		echo  "<div class='TitulosMensajes'><img src='img/material.png'  class='imgsInsumos'>&nbsp;&nbsp;&nbsp;&nbsp;<p id='TT'>Material o herramientas</p></div>";
		echo "<button id='btnNuevoCap' data-toggle='modal' data-target='#modalAgregarMaterial' onclick='cambiarTituloModalMaterial(".$id.")'>Nuevo</button><br><br><br>";
		echo "<table id='tablaCapacit' class='table table-condensed'>
		<thead class='thead-dark '>
			<tr id='filatitulos'>
				<th>No.</th>
				<th>Tipo de Material o herramienta</th>     
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
				<td><button type='button' class='btn btn-danger' onclick = 'eliminarMaterial(".$row["id"].")'>Eliminar</button></td>
				<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modalAgregarMaterial' onclick = 'editarMaterial(".$row["id"].",
									\"".$row['variedad']."\",
									\"".$row['anio']."\",
									\"".$row['cantidad']."\"
									)'>Editar</button></td>
			</TR>";
	}
		echo"</table>";
	}


	if ($accion == "+Material"){
		$MaterialId = $_POST["id"];
 		$MaterialVariedad = $_POST["variedad"];
 		$MaterialAnio = $_POST["anio"];
 		$MaterialCantidad = $_POST["cantidad"];
 		if($MaterialVariedad == true and $MaterialAnio == true and $MaterialCantidad == true){
			$sql = "insert into materialherramientas (variedad, anio, cantidad, idProductor)
					values ('$MaterialVariedad','$MaterialAnio','$MaterialCantidad','$MaterialId')";
		$conex->query($sql);
		echo "OK";
		}else{
	 echo"<script> alert('Rellena todos los campos para poder agregar un nuevo material');</script>";
	 echo "OK";
				}
	}

	if ($accion == "aMaterial") {				//para actualizar utilizamos el id del registro de la tabla no del usuario
		$idMaterial = $_POST["id"];
		$VariedadMaterial = $_POST["variedad"];
		$anioMaterial = $_POST["anio"];
		$cantidadMaterial = $_POST["cantidad"];
	
		$sql = "update materialherramientas set
		 id='".$idMaterial."',
		 variedad='".$VariedadMaterial."',
		 anio='".$anioMaterial."',
		 cantidad='" .$cantidadMaterial."'

		   where id='".$idMaterial."'";

		   $conex->query($sql);

		   echo "OK";
	
}

if($accion=="-Material"){
	$id = $_POST["id"];
	$sql ="delete from materialherramientas where id=".$id;
	$conex->query($sql);
	echo "OK";
}

if ($accion== "verEquipo") {
	$sql = "SELECT * FROM equipo where idProductor='".$id."'";
		$tbl = $conex->query($sql);
		echo  "<div class='TitulosMensajes'><img src='img/equipo1.png'  class='imgsInsumos'>&nbsp;&nbsp;&nbsp;&nbsp;<p id='TT'>Equipo</p></div>";
		echo "<button id='btnNuevoCap' data-toggle='modal' data-target='#modalAgregarEquipo' onclick='cambiarTituloModalEquipo(".$id.")'>Nuevo</button><br><br><br>";
		echo "<table id='tablaCapacit' class='table table-condensed'>
		<thead class='thead-dark '>
			<tr id='filatitulos'>
				<th>No.</th>
				<th>Tipo de equipo</th>     
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
				<td><button type='button' class='btn btn-danger' onclick = 'eliminarEquipo(".$row["id"].")'>Eliminar</button></td>
				<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modalAgregarEquipo' onclick = 'editarEquipo(".$row["id"].",
									\"".$row['variedad']."\",
									\"".$row['anio']."\",
									\"".$row['cantidad']."\"
									)'>Editar</button></td>
			</TR>";
	}
		echo"</table>";
	}

	if ($accion == "+Equipo"){
		$EquipoId = $_POST["id"];
 		$EquipoVariedad = $_POST["variedad"];
 		$EquipoAnio = $_POST["anio"];
 		$EquipoCantidad = $_POST["cantidad"];
 		if($EquipoVariedad == true and $EquipoAnio == true and $EquipoCantidad == true){
			$sql = "insert into equipo (variedad, anio, cantidad, idProductor)
					values ('$EquipoVariedad','$EquipoAnio','$EquipoCantidad','$EquipoId')";
		$conex->query($sql);
		echo "OK";
		}else{
		 echo"<script> alert('Rellena todos los campos para poder agregar un nuevo equipo');</script>";
		 echo "OK";
				}
	}

	if ($accion == "aEquipo") {				//para actualizar utilizamos el id del registro de la tabla no del usuario
		$idEquipo = $_POST["id"];
		$VariedadEquipo = $_POST["variedad"];
		$anioEquipo = $_POST["anio"];
		$cantidadEquipo = $_POST["cantidad"];
	
		$sql = "update equipo set
		 id='".$idEquipo."',
		 variedad='".$VariedadEquipo."',
		 anio='".$anioEquipo."',
		 cantidad='" .$cantidadEquipo."'

		   where id='".$idEquipo."'";

		   $conex->query($sql);
		   echo "OK";
	
}


if($accion=="-Equipo"){
	$id = $_POST["id"];
	$sql ="delete from equipo where id=".$id;
	$conex->query($sql);
	echo "OK";
}


if ($accion== "verVivero") {
	$sql = "SELECT * FROM materialvivero where idProductor='".$id."'";
		$tbl = $conex->query($sql);
		echo  "<div class='TitulosMensajes'><img src='img/vivero.png'  class='imgsInsumos'>&nbsp;&nbsp;&nbsp;&nbsp;<p id='TT'>Material para vivero</p></div>";
		echo "<button id='btnNuevoCap' data-toggle='modal' data-target='#modalAgregarVivero' onclick='cambiarTituloModalVivero(".$id.")'>Nuevo</button><br><br><br>";
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
		<td>".$row["variedad"]."</td>
		<td>".$row["anio"]."</td>
		<td>".$row["cantidad"]."</td>
		<td><button type='button' class='btn btn-danger' onclick = 'eliminarVivero(".$row["id"].")'>Eliminar</button></td>
		<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modalAgregarVivero' onclick = 'editarVivero(".$row["id"].",
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

	if ($accion == "+Vivero"){
		$ViveroId = $_POST["id"];
 		$ViveroVariedad = $_POST["variedad"];
 		$ViveroAnio = $_POST["anio"];
 		$ViveroCantidad = $_POST["cantidad"];
 		if($ViveroVariedad == true and $ViveroAnio == true and $ViveroCantidad == true){
			$sql = "insert into materialvivero (variedad, anio, cantidad, idProductor)
					values ('$ViveroVariedad','$ViveroAnio','$ViveroCantidad','$ViveroId')";
		$conex->query($sql);
		echo "OK";
		}else{
		 echo"<script> alert('Rellena todos los campos para poder agregar nuevo material para vivero');</script>";
		 echo "OK";
				}
	}


	if ($accion == "aVivero") {				//para actualizar utilizamos el id del registro de la tabla no del usuario
		$idVivero = $_POST["id"];
		$VariedadVivero = $_POST["variedad"];
		$anioVivero = $_POST["anio"];
		$cantidadVivero = $_POST["cantidad"];
	
		$sql = "update materialvivero set
		 id='".$idVivero."',
		 variedad='".$VariedadVivero."',
		 anio='".$anioVivero."',
		 cantidad='" .$cantidadVivero."'

		   where id='".$idVivero."'";

		   $conex->query($sql);
		   echo "OK";
	
}

if($accion=="-Vivero"){
	$id = $_POST["id"];
	$sql ="delete from materialvivero where id=".$id;
	$conex->query($sql);
	echo "OK";
}




if ($accion== "verSeco") {
	$sql = "SELECT * FROM beneficioseco where idProductor='".$id."'";
		$tbl = $conex->query($sql);
		echo  "<div class='TitulosMensajes'><img src='img/seco.png'  class='imgsInsumos'>&nbsp;&nbsp;&nbsp;&nbsp;<p id='TT'>Beneficio seco</p></div>";
		echo "<button id='btnNuevoCap' data-toggle='modal' data-target='#modalAgregarSeco' onclick='cambiarTituloModalSeco(".$id.")'>Nuevo</button><br><br><br>";
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
		<td>".$row["variedad"]."</td>
		<td>".$row["anio"]."</td>
		<td>".$row["cantidad"]."</td>
		<td><button type='button' class='btn btn-danger' onclick = 'eliminarSeco(".$row["id"].")'>Eliminar</button></td>
		<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modalAgregarSeco' onclick = 'editarSeco(".$row["id"].",
									\"".$row['variedad']."\",
									\"".$row['anio']."\",
									\"".$row['cantidad']."\"
									)'>Editar</button></td>
	</TR>";
	}
	echo"</table>";
	}

	if ($accion == "+Seco"){
		$SecoId = $_POST["id"];
 		$SecoVariedad = $_POST["variedad"];
 		$SecoAnio = $_POST["anio"];
 		$SecoCantidad = $_POST["cantidad"];
 		if($SecoVariedad == true and $SecoAnio == true and $SecoCantidad == true){
			$sql = "insert into beneficioseco (variedad, anio, cantidad, idProductor)
					values ('$SecoVariedad','$SecoAnio','$SecoCantidad','$SecoId')";
		$conex->query($sql);
		echo "OK";
		}else{
		 echo"<script> alert('Rellena todos los campos para poder agregar nuevo beneficio seco');</script>";
		 echo "OK";
				}
	}


	
	if ($accion == "aSeco") {				//para actualizar utilizamos el id del registro de la tabla no del usuario
		$idSeco = $_POST["id"];
		$VariedadSeco = $_POST["variedad"];
		$anioSeco = $_POST["anio"];
		$cantidadSeco = $_POST["cantidad"];
	
		$sql = "update beneficioseco set
		 id='".$idSeco."',
		 variedad='".$VariedadSeco."',
		 anio='".$anioSeco."',
		 cantidad='" .$cantidadSeco."'

		   where id='".$idSeco."'";

		   $conex->query($sql);
		   echo "OK";
	
}

if($accion=="-Seco"){
	$id = $_POST["id"];
	$sql ="delete from beneficioseco where id=".$id;
	$conex->query($sql);
	echo "OK";
}

if ($accion== "verEventos") {
	$sql = "SELECT * FROM eventos where idProductor='".$id."'";
		$tbl = $conex->query($sql);
		
		echo "<button id='btnNuevoCap' data-toggle='modal' data-target='#modalAgregarEventos' onclick='cambiarTituloModalEventos(".$id.")'>Nuevo</button><br><br><br>";
		echo "<table id='tablaCapacit' class='table table-condensed'>
		<thead class='thead-dark '>
			<tr id='filatitulos'>
				<th>No.</th>
				<th>Evento</th>
				<th>Fecha</th>
				<th>Dias de asistencia</th>
				<th colspan='2'>Opciones</th>
			</tr>
		</thead>
		";
		while ($row = $tbl->fetch_array()){
	echo"
	<TR>
		<td>".$row["id"]."</td>
		<td>".$row["evento"]."</td>
		<td>".$row["fecha"]."</td>
		<td>".$row["diasAsistencia"]."</td>
		<td><button type='button' class='btn btn-danger' onclick = 'eliminarEventos(".$row["id"].")'>Eliminar</button></td>
		<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modalAgregarEventos' onclick = 'editarEventos(".$row["id"].",
									\"".$row['evento']."\",
									\"".$row['fecha']."\",
									\"".$row['diasAsistencia']."\"
									)'>Editar</button></td>
	</TR>";
	}
	echo"</table>";
	}

	if ($accion == "+Evento"){
		$EvId = $_POST["id"];
 		$EvEvento = $_POST["evento"];
 		$EvFecha = $_POST["fecha"];
 		$EvDias = $_POST["diasAsistencia"];
 		
			if($EvEvento == true and $EvFecha == true and $EvDias == true){
			$sql = "insert into eventos  (evento, fecha, diasAsistencia, idProductor)
					values ('$EvEvento','$EvFecha','$EvDias', '$EvId')";
		$conex->query($sql);
		echo "OK";
		}else{
			echo"<script> alert('Rellena todos los campos para poder agregar nuevo Evento');</script>";
			echo "OK";
		}

	}


	if ($accion == "aEvento") {				//para actualizar utilizamos el id del registro de la tabla no del usuario
		$IdEvento = $_POST["Id"];
		$Evento = $_POST["Evento"];
		$Fecha = $_POST["EvFecha"];
		$DiasAsistencia = $_POST["DiasAsistencia"];
	
		$sql = "update eventos set
		 id='".$IdEvento."',
		 evento='".$Evento."',
		 fecha='".$Fecha."',
		 diasAsistencia='" .$DiasAsistencia."'

		   where id='".$IdEvento."'";

		   $conex->query($sql);
		   echo "OK";
	
}

if($accion=="-Evento"){
	$id = $_POST["id"];
	$sql ="delete from eventos where id=".$id;
	$conex->query($sql);
	echo "OK";
}


if ($accion== "verCiclos") {
	echo "<button id='btnAgregarDP' data-toggle='modal' data-target='#modalAgregarCiclos' onclick='cambiarTitulo(".$id.")'  >Nuevo ciclo </button><br>";
	$sql = "SELECT * FROM ciclosproduccion where idProductor='".$id."'";
	$r= $conex-> query($sql);
		if ($r->num_rows>0){
			
			while ($row = $r->fetch_array()){
				echo"
				<button type='button' class='btn btn-warning' id='botonci' onclick='DetallesCiclos(".$row["id"].")'>".$row["ciclo"]."</button>
				
				";


			}
		
	}

}




if ($accion== "verDetallesCiclo") {
	
	$idCiclo = $_POST["idCiclo"];
	$sql = "SELECT * FROM ciclosproduccion where id='".$idCiclo."'";
		$tbl = $conex->query($sql);
		
		while ($row = $tbl->fetch_array()){
	echo"
		<div id='DivCiclos'>
		
			<p style='display: none' class='CiclosEncab'>id:					</p>
			<p style='display: none' class='CiclosCamp'>".$row["id"]."		</p><br>
			<p class='CiclosEncab'>Ciclo:				</p>
			<p class='CiclosCamp'>".$row["ciclo"]."		</p><br>
			<p class='CiclosEncab'>Estimado de produccion de cafe pergamino(Kg):</p>
			<p class='CiclosCamp'> ".$row["estimado"]." </p><br>
			<br>
			<p id='tituloMT'>Muestra tomada<p>
			<hr>
			<p class='CiclosEncab'>Fecha de recepción:  </p>
			<p class='CiclosCamp'>".$row["fechaRecepcionMuestra"]."</p><br>
			<p class='CiclosEncab'>Fecha de la entrega de resultados:  </p>
			<p class='CiclosCamp'>".$row["fechaEntregaResultados"]."</p><br>
			<p class='CiclosEncab'>Fecha del envio de la muestra:  </p>
			<p class='CiclosCamp'>".$row["fechaEnvioMuestra"]."</p><br>
			<p class='CiclosEncab'>Fecha de la recepción de los resultados:  </p>
			<p class='CiclosCamp'>".$row["fechaRecepcionResultados"]."</p><br>
			<p class='CiclosEncab'>Puntaje:  </p>
			<p class='CiclosCamp'>".$row["puntaje"]."</p><br>
			<p class='CiclosEncab'>Porcentaje de mancha:  </p>
			<p class='CiclosCamp'>".$row["porcentajeMancha"]."</p><br>
			<hr>
			<br>
			<p class='CiclosEncab'>Cantidad Acopida:  </p>
			<p class='CiclosCamp'>".$row["cantidadAcopiada"]."</p><br>
			<p class='CiclosEncab'>Precio Anticipo:  </p>
			<p class='CiclosCamp'>".$row["precioAnticipo"]."</p><br>
			<p class='CiclosEncab'>Precio final:  </p>
			<p class='CiclosCamp'>".$row["precioFinal"]."</p><br>
			<p class='CiclosEncab'>Humedad:  </p>
			<p class='CiclosCamp'>".$row["humedad"]."</p><br>
			<p class='CiclosEncab'>Rendimiento:  </p>
			<p class='CiclosCamp'>".$row["rendimiento"]."</p><br>
			<p class='CiclosEncab'>Nombre del lote:  </p>
			<p class='CiclosCamp'>".$row["nombreLote"]."</p><br>
			<p class='CiclosEncab'>Fecha del lote:  </p>
			<p class='CiclosCamp'>".$row["fechaLote"]."</p><br>
			<p class='CiclosEncab'>Comprador:  </p>
			<p class='CiclosCamp'>".$row["comprador"]."</p><br>
			<br><br>

		
			<td><button type='button' class='btn btn-danger' onclick = 'eliminarEventos(".$row["id"].")'>Eliminar</button></td>
			<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modalAgregarEventos' onclick = 'editarEventos(".$row["id"].",
									\"".$row['ciclo']."\",
									\"".$row['estimado']."\",
									\"".$row['fechaRecepcionMuestra']."\"
									)'>Editar</button></td>
		</div>
	";
	}
	
	}


   ?>

   










   