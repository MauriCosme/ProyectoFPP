<?php 

session_start();
$varsession = $_SESSION['usuario'];
if($varsession == null || $varsession =''){

	echo 'Usted no tiene autorizacion';
	die();
}
 ?>
 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>INICIO</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/principal.css">	
</head>
<body>
	<div id="bloque1">
		<div id="izq">
			<img id="imgfpp" src="img/fpp.png" class="img-fluid" alt="Responsive image">
		</div>
		<div id="cent">
			<h1 id="SAIP"> SAIP</h1>
		</div>
		<div id="der">
		 	<img src="img/usuario.png" class="img-fluid" alt="Responsive image">
		  	<p id="usuari"><?php echo $_SESSION['usuario'] ?></p>
		 	<button id="cerrar" onclick="cerrarsession()">cerrar sesion</button>
		 </div>
	</div>
	<div id="bloque2">
		<center>
		<table id="buscador">
			<tr>
				<td id="textobuscarpor">Buscar por:</td>
				<td >
					<button id="btnBuscador" class="btn btn-warning"  data-toggle="modal" data-target="#BuscarNombre" onclick="Bnombre()" >Nombre</button>
				</td>
				<td >
					<button id="btnBuscador" class="btn btn-warning" data-toggle="modal" data-target="#BuscarNombre" onclick="BCodigo()">Codigo</button>
				</td>
				<td >
					<button id="btnBuscador" class="btn btn-warning" data-toggle="modal" data-target="#BuscarNombre" onclick="BId()">Id familia</button>
				</td>
				<td >
					<button id="btnBuscador" class="btn btn-warning" data-toggle="modal" data-target="#BuscarNombre" onclick="BLocalidad()">Localidad</button>
				</td>
			</tr>
		</table>
		</center>
	</div>
	<div id="bloque3">
		<center>
		<button id="btnB3Agregar" class="btn btn-success" data-toggle="modal" data-target="#miModal" onclick="limpiar()">Agregar</button>
		<button id="btnB3VerPuntaje" >Ver por puntaje</button>
		</center>
	</div>
	<br>
	<div id="bloque4">
		
			<div class="table-responsive" id="divBaseTabla2">
				
			</div>
			
			<div class="table-responsive" id="divBaseTabla">
				
			</div>
				<!-- <div id="mensaje">
				</div> -->
<center>
		<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 id="titulo" class="modal-title" id="myModalLabel"></h4>
		      </div>
		      <div id="cuerpo" class="modal-body">
		      	<p> Nombre del productor:</p>
				<input name="txtNombre" type="text" name="" id="txtNombre">
				<p>Codigo:</p>
				<input type="text" name="" id="txtCodigo">
				<p>Localidad:</p>
				<input type="text" name="" id="txtLocalidad">
				<p>Estado:</p>
				<input type="text" name="" id="txtEstado">
				<p>Id de familia FPP:</p>
				<input type="text" name="" id="txtIdFamiliaFPP">
				<p>Municipio:</p>
				<input type="text" name="" id="txtMunicipio">
				<p>Curp:</p>
				<input type="text" name="" id="txtCurp">

				<p>¿Es titular del folio de padron cafetalero?</p>
				<hr>

				<p>Numero de folio:</p>
				<input type="text" name="" id="txtNumFolio">
				<p>Nombre del titular:</p>
				<input type="text" name="" id="txtNombreTitular">
				<p>Sexo:</p>
				<input type="text" name="" id="txtSexo">
				<p>Fecha de nacimiento:</p>
				<input type="text" name="" id="txtFechaNac">
				<p>Nombre del conyuge:</p>
				<input type="text" name="" id="txtNombreConyuge">
				<p>¿Es productor guia?</p>
				<input type="text" name="" id="txtProductorGuia">
				<p>Año de incorporacion al proyecto de cafe:</p>
				<input type="text" name="" id="txtAnioIncorporacion">
				<br>
				<br>
				<button id="agregar" type="button" class="btn btn-primary" class='btn btn-danger'  data-dismiss="modal" onclick="agregar(), agregarDP()">Guardar</button>
				<br>
				<br>
				
				
				<button id="btnCancelar" type="button" class='btn btn-danger'  data-dismiss="modal" >
		       		Cancelar
		      	</button>
		      </div>
		    </div>
		  </div>
		</div>


		<div class="modal fade" id="BuscarNombre" tabindex="-1" role="dialog" aria-labelledby="BuscarNombre" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <center> <h4 id="titulo" class="modal-title" id="myModalLabel"> Buscar</h4></center>
		      </div>
		      <div id="cuerpo" class="modal-body">
		      	<p id=tipo> Nombre:</p>
				<input name="txtNombre" type="text" name="" id="txtNombre">
				<br>
				<br>
				<button id="agregar" type="button" class="btn btn-primary" class='btn btn-danger'  data-dismiss="modal" onclick="BuscarNombre()">Buscar</button>
				<br>
				<br>
				<div id="mensaje">
				</div>
				<button id="btnCancelar" type="button" class='btn btn-danger'  data-dismiss="modal" >
		       		Cancelar
		      	</button>
		      </div>
		    </div>
		  </div>
		</div>

		</center>
	</div>





</body>
</html>

<script type="">

function cerrarsession(){
	document.location="cerrarSesion.php";
}

function limpiar(){

$("#txtNombre").val(""),
$("#txtCodigo").val(""),
$("#txtLocalidad").val(""),
$("#txtEstado").val(""),
$("#txtIdFamiliaFPP").val(""),
$("#txtMunicipio").val(""),
$("#txtCurp").val(""),
$("#txtNumFolio").val(""),
$("#txtNombreTitular").val(""),
$("#txtSexo").val(""),
$("#txtFechaNac").val(""),
$("#txtNombreConyuge").val(""),
$("#txtProductorGuia").val(""),
$("#txtAnioIncorporacion").val("")


}


function Bnombre(){
		$("#tipo").html("Nombre");
}

function BCodigo(){
		$("#tipo").html("Codigo");
}
function BId(){
		$("#tipo").html("Id Familia");
}
function BLocalidad(){
		$("#tipo").html("Localidad");
}




	function mostrar(){

		var parametros={				
			"accion" : "mostrar"
				};

		$.ajax({
			data: parametros,
			url:'controlPrincipal.php',
			type:'POST',
			beforeSend: function(){
				$("#divBaseTabla").html("Espere un momento...");
								  },
			success: function (response){
				if (response!="OK"){
					$("#divBaseTabla").html(response);
									}
										} 
						});
	}

	function mostrartitulos(){

		var parametros={				
			"accion2" : "mostrart"
				};

		$.ajax({
			data: parametros,
			url:'controlPrincipal.php',
			type:'POST',
			beforeSend: function(){
				$("#divBaseTabla").html("Espere un momento...");
								  },
			success: function (response){
				if (response!="OK"){
					$("#divBaseTabla2").html(response);
									}
										} 
						});
	}

	mostrartitulos()
	mostrar()
	



function agregar(){
var parametros ={
	"accion" : "+",
	"nombre": $("#txtNombre").val(),
	"codigo": $("#txtCodigo").val(),
	"localidad": $("#txtLocalidad").val(),
	"estado": $("#txtEstado").val(),
	"idFamiliaFPP": $("#txtIdFamiliaFPP").val(),
	"municipio": $("#txtMunicipio").val(),
	"curp": $("#txtCurp").val(),
	"numeroDeFolio": $("#txtNumFolio").val(),
	"nombretitular": $("#txtNombreTitular").val(),
	"sexo": $("#txtSexo").val(),
	"fechaDeNacimiento": $("#txtFechaNac").val(),
	"nombreConyuge": $("#txtNombreConyuge").val(),
	"productorGuia": $("#txtProductorGuia").val(),
	"anioDeIncorporacion": $("#txtAnioIncorporacion").val(),
};


$.ajax({
data: parametros,
						url:'controlPrincipal.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								mostrar();
							}
								}
							});
	

}




</script>