<?php  
include "conexion.php";
 	$accion = $_POST["accion"];
 	$id = $_POST["id"];

$sql = "SELECT * FROM datosPago where idProductor='".$id."'";

$r= $conex-> query($sql);

if ($r->num_rows>0){
	$row = $r->fetch_array();
	$tbl = $conex->query($sql);

		while ($row = $tbl->fetch_array()){
			 echo"<button id='btnEditarDP' data-toggle='modal' data-target='#EditarDP' onclick = 'editarDP(".$row["id"].",
											\"".$row['folioPadron']."\",
											\"".$row['folioPadronPrestado']."\",
											\"".$row['nombreProductor']."\",
											\"".$row['institucionBancaria']."\",
											\"".$row['titularCuenta']
											."\"

						)' >Editar</button>".

			"<div class='preg'>".
				"<strong>Folio Padron: </strong>
				<input readonly='readonly' id='inputsform'  value='".$row["folioPadron"]."'>".
			"</div>".

			"<div id='marcoFolioPrestador'>
			<h3>Folio de Padron prestado</h3>
			 <br><div class='preg'>".
				"<strong>Folio: </strong>
				<input readonly='readonly' id='inputsform'  value='".$row["folioPadronPrestado"]."'>".
			"</div>".

			" <div class='preg'>".
				"<strong>Nombre productor: </strong>
				<input readonly='readonly' id='inputsform'  value='".$row["nombreProductor"]."'>".
			"</div></div>".

			" <br><br><br> <div class='preg'>".
				"<strong>Institucion Bancaria: </strong>
				<input readonly='readonly' id='inputsform'  value='".$row["institucionBancaria"]."'>".
			"</div>".

			" <br> <div class='preg'>".
				"<strong>Titular de la cuenta: </strong>
				<input readonly='readonly' id='inputsform'  value='".$row["titularCuenta"]."'>".
			"</div>";	

		
// if ($tbl->num_rows>0){
// echo "no existe";
// //echo "<script> alert ('si existe en la base de datos'+ '".$row["titularCuenta"]."');</script>";
// //echo "<script> alert ('si existe en la base de datos'+ '".$var."');</script>";

// }
}

}
else{




	echo"NO EXISTEN DATOS DE PAGO PARA ESTE USUARIO";
	echo "<button id='btnAgregarDP' data-toggle='modal' data-target='#EditarDP' onclick='cambiarTitulo(".$id.")'  >Agregar datos </button>";
}

?>