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
					<button  id="btnBuscador" class="btn btn-warning"  data-toggle="modal" data-target="#BuscarNombre"  >Nombre</button>
				</td>
				<td >
					<button id="btnBuscador" class="btn btn-warning" data-toggle="modal" data-target="#BuscarCodigo" >Codigo</button>
				</td>
				<td >
					<button id="btnBuscador" class="btn btn-warning" data-toggle="modal" data-target="#BuscarLocalidad" >Localidad</button>
				</td>
				<td >
					<button id="btnBuscador" class="btn btn-warning" data-toggle="modal" data-target="#BuscarIdFamilia" >Id familia</button>
				</td>
			</tr>
		</table>
		</center>
	</div>
	<div id="bloque3">
		<center>
		<button id="btnAdmin"     class="btn btn-info" onclick="RegresarAPanelAdmin()" >Panel Administrador</button>
		<button id="btnB3Agregar" class="btn btn-success" data-toggle="modal" data-target="#miModal" onclick="limpiar()">Agregar</button>
		<button id="BtnVerTodos" class="btn btn-success"  onclick="mostrar()">Ver tabla completa </button>
		<button class="btn btn-success" data-toggle="modal" data-target="#verpuntaje" onclick="limpiartabla()">Ver por puntaje</button>
		<button class="btn btn-success"  onclick="descargarExcel()">Exportar tabla a Excel</button>
		</center>
	</div>
	<br>
	<div id="bloque4">
		
			<div  class="table-responsive" id="divBaseTabla2">
				
				</div>
			
			<div  class="table-responsive" id="divBaseTabla">
				
			</div>
				<!-- <div id="mensaje">
				</div> -->
<center>
		<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 id="titulo" class="modal-title" id="myModalLabel">Agregando productor</h4>
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
				<br>
				<!--<strong> <p>si es titular del folio de padron cafetalero rellena </p></strong>-->
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

		<!--  ventana modal buscar  por nombre -->
		<div class="modal fade" id="BuscarNombre" tabindex="-1" role="dialog" aria-labelledby="BuscarNombre" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <center> <h4 id="titulo" class="modal-title" id="myModalLabel"> Buscar por nombre</h4></center>
		      </div>
		      <div id="cuerpo" class="modal-body">
		      <!--	<p id=tipo> Nombre:</p>-->
				<input placeholder="Ingresa el nombre" name="" type="text" name="" id="txtBuscNombre">
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
		<!--  ventana modal buscar  por  Codigo-->
		<div class="modal fade" id="BuscarCodigo" tabindex="-1" role="dialog" aria-labelledby="BuscarCodigo" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <center> <h4 id="titulo" class="modal-title" id="myModalLabel"> Buscar por codigo</h4></center>
		      </div>
		      <div id="cuerpo" class="modal-body">
				<input placeholder="Codigo"  name="" type="text" name="" id="txtBuscCodigo">
				<br>
				<br>
				<button id="agregar" type="button" class="btn btn-primary" class='btn btn-danger'  data-dismiss="modal" onclick="BuscarCodigo()">Buscar</button>
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
		<!--  ventana modal buscar  por  localidad-->
		<div class="modal fade" id="BuscarLocalidad" tabindex="-1" role="dialog" aria-labelledby="BuscarLocalidad" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <center> <h4 id="titulo" class="modal-title" id="myModalLabel"> Buscar por localidad</h4></center>
		      </div>
		      <div id="cuerpo" class="modal-body">
		      	
				<input placeholder="Nombre de la localidad" name="" type="text" name="" id="txtBuscLocalidad">
				<br>
				<br>
				<button id="agregar" type="button" class="btn btn-primary" class='btn btn-danger'  data-dismiss="modal" onclick="BuscarLocalidad()">Buscar</button>
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
		<!--  ventana modal buscar  por  id de la familia-->
		<div class="modal fade" id="BuscarIdFamilia" tabindex="-1" role="dialog" aria-labelledby="BuscarIdFamilia" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <center> <h4 id="titulo" class="modal-title" id="myModalLabel"> Buscar por ID de la familia </h4></center>
		      </div>
		      <div id="cuerpo" class="modal-body">
				<input placeholder="ID de la familia" name="" type="text" name="" id="txtBuscIdFamilia">
				<br>
				<br>
				<button id="agregar" type="button" class="btn btn-primary" class='btn btn-danger'  data-dismiss="modal" onclick="BuscarIdFamilia()">Buscar</button>
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


		<div class="modal fade" id="verpuntaje" tabindex="-1" role="dialog" aria-labelledby="verpuntaje" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <center> <h4 id="titulo" class="modal-title" id="myModalLabel"> Puntaje  </h4></center>
		      </div>
		      <div id="cuerpo" class="modal-body">
			  	<p>Escribe el ciclo que desees ver </p>
				<input placeholder="Ciclo" name="" type="text" name="" id="txtThisCiclo">
				<br>
				<br>
				<br>
				<p>Escribe el puntaje que desees ver </p>
				<input placeholder="puntaje" name="" type="text" name="" id="txtThisPuntaje">
				<br>
				<br>
				<button id="agregar" type="button" class="btn btn-primary"   onclick="puntaje()">Filtrar</button>
				<br>
				<br>
				<div id="mensajees">
				</div>
				<button id="btnCancelar" type="button" class='btn btn-danger'  data-dismiss="modal" >
		       		Cancelar
		      	</button>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="SGelim" tabindex="-1" role="dialog" aria-labelledby="SGelim" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <center> <h4 id="titulo" class="modal-title" id="myModalLabel"> Eliminando  </h4></center>
		      </div>
		      <div id="cuerpo" class="modal-body">
			  	<p>Estas seguro que quieres eliminar los datos de esta persona </p>
				<input  name="" type="hidden" name="" id="txtIDElim">
				<br>
				<input  name="" type="text" name="" id="txtNomELim">
				<br>
				<br>
				<button id="ElimP" type="button" class="btn btn-primary"   onclick="elimPr()">Eliminar</button>
				<br>
				<br>
				<div id="mensajees">
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

function elimPr(){
	var idelim = $("#txtIDElim").val();
	var parametros={				
	"accion" : "-pro",
	"ide": idelim
	
		};

$.ajax({
	data: parametros,
	url:'controlPrincipal.php',
	type:'POST',
	beforeSend: function(){
		$("#divBaseTabla").html("Espere un momento...");
						  },
	success: function (response){
		
			
			mostrar()
							
						
								} 
				});
}


function  SGeliminar(id, nombre){

$("#txtIDElim").val(id);
$("#txtNomELim").val(nombre);

}



function descargarExcel(){
        //Creamos un Elemento Temporal en forma de enlace
        var tmpElemento = document.createElement('a');
        // obtenemos la información desde el div que lo contiene en el html
        // Obtenemos la información de la tabla
        var data_type = 'data:application/vnd.ms-excel';
        var tabla_div = document.getElementById('tab2');
        var tabla_html = tabla_div.outerHTML.replace(/ /g, '%20');
        tmpElemento.href = data_type + ', ' + tabla_html;
        //Asignamos el nombre a nuestro EXCEL
        tmpElemento.download = 'Productores';
        // Simulamos el click al elemento creado para descargarlo
        tmpElemento.click();
    }




function limpiartabla(){
	
	$("#mensajees").html("");
	$("#txtThisCiclo").val("");
	$("#txtThisPuntaje").val("");

}


function puntaje(){
var parametros={				
	"accion" : "VerPuntaje",
	"ciclo": $("#txtThisCiclo").val(),
	"puntaje": $("#txtThisPuntaje").val()
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
			$("#mensajees").html(response);
			mostrar()
							}
						
								} 
				});


}






function BuscarNombre(){
var parametros={				
	"accion" : "BuscarNom",
	"nombre": $("#txtBuscNombre").val()
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


function BuscarCodigo(){
	var parametros={				
	"accion" : "BuscarCod",
	"codigo": $("#txtBuscCodigo").val()
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



function BuscarLocalidad(){
	var parametros={				
	"accion" : "BuscarLoc",
	"localidad": $("#txtBuscLocalidad").val()
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


function BuscarIdFamilia(){
	// var idfamily =$("#txtBuscIdFamilia").val();
	// alert(idfamily); 
	var parametros={				
	"accion" : "BuscarIdFam",
	"idFamilia": $("#txtBuscIdFamilia").val()
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










function RegresarAPanelAdmin(){
	document.location="admin.php";
}

function verBtnAdmin(){

	var usuario='<?php echo $_SESSION['usuario'] ?>';
	
	if( usuario =="MAURI"){
		
		$("#btnAdmin").show();
		
		}
		else{

			$("#btnAdmin").hide();
		}	

}





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



function mostrarTablaOculta(){
		$("#divBaseTabla2").hide();
		var parametros={				
			"accion" : "mostrarTabOc"
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

	mostrarTablaOculta()

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

	/*function mostrartitulos(){

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

	mostrartitulos()*/
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

verBtnAdmin()


</script>