<?php
session_start();
$varsession = $_SESSION['usuario'];
if($varsession == null || $varsession =''){

	echo 'Usted no tiene autorizacion';
	die();
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];

 // echo "El Id es: ".$nombre;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Productor</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/productor.css">	
</head>
<body>

	<div id="bloque1">
		<div id="izq">
			<img id="fpp" src="img/fpp.png" class="img-fluid" alt="Responsive image">
		</div>
		<div id="cent">
			<img id="imgProductor" src="img/profesor.png">
			
		</div>
		<div id="der">
		 	<img id="imgUsuario" src="img/usuario.png" class="img-fluid" alt="Responsive image">
		  	<p id="usuario"><?php echo $_SESSION['usuario'] ?></p>
		 	<button id="cerrar" onclick="cerrarsession()">cerrar sesion</button>
		 </div>
	</div>
		

	<div id="inic">
		<button id="btninic" class="btn btn-success" onclick="inicio()">inicio</button>
		<h2 id="nomMorado"><?php echo $nombre;  ?></h2>		
	<center>
			<div>
				<button class="btnsInsumos" onclick="CambColor1(), verNutricion()" type="button" id="btnNutri">Nutricion</button>
				<button class="btnsInsumos" onclick="CambColor2(), verPrevencion()" type="button" id="btnPreven">Prevención</button>
				<button class="btnsInsumos" onclick="CambColor3(), verCafe()" type="button" id="btnCafe">Plantas de cafe</button>
				<button class="btnsInsumos" onclick="CambColor4()" type="button" id="btnSombra">Arboles de Sombra</button>
				<button class="btnsInsumos" onclick="CambColor5()" type="button" id="btnMat">Material o herramientas</button>
				<button class="btnsInsumos" onclick="CambColor6()" type="button" id="btnEquip">Equipo</button>
				<button class="btnsInsumos" onclick="CambColor7()" type="button" id="btnVivero">Material para vivero</button>
				<button class="btnsInsumos" onclick="CambColor8()" type="button" id="btnBenefic">Beneficio seco</button>

			</div>
		</center>
	</div>



	<div id="bloque2">

		<div id="barrabotones">
				<button id="btn1" class="botones" onclick="pBTN1(), ver(), ocultarBTNIns()">
				Datos Generales
				</button>
				<br>
				<button id="btn2" class="botones" onclick="pBTN2(), validarDatosPago(), ocultarBTNIns()">
				Datos para pago
				</button>
				<br>
				<button id="btn3" class="botones" onclick="pBTN3(), verCapacitaciones(),  ocultarBTNIns()">
				Capacitaciones
				</button>
				<br>
				<button id="btn4" class="botones" onclick="pBTN4(), verNutricion(),  mostrarBTNIns(), CambColor1()">
				Entrega de insumos
				</button>
				<br>
				<button id="btn5" class="botones" onclick="pBTN5(),ocultarBTNIns()">
				Eventos
				</button>
				<br>
				<button id="btn6" class="botones" onclick="pBTN6(), ocultarBTNIns()">
				Ciclos de Producción
				</button>
				
		</div>

		<div id="mensaje">


						<!-- aqui van los datos -->
		</div>
		<center>
			<div class="modal fade" id="EditarDatosG" tabindex="-1" role="dialog" aria-labelledby="EditarDatosG" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <center> <h4 id="titulo" class="modal-title" id="myModalLabel"> Editando Datos</h4></center>
			      </div>
			      <div id="cuerpo" class="modal-body">

			      	<input value="" class="inputsform" type="hidden" name="" id="txtId">
			      	<br>
			      	<strong> Nombre Productor:</strong><br> <input class="inputsform" type="" name="" id="txtNombre">
			      	<br>
			      	<strong>Codigo:</strong> <br><input class="inputsform" type="" name="" id="txtCodigo">
			      	<br>
			      	<strong>Localidad:</strong> <br> <input class="inputsform" type="" name="" id="txtLocalidad">
			      	<br>
			      	<strong>Estado:</strong> <br> <input class="inputsform" type="" name="" id="txtEstado">
			      	<br>
			      	<strong>Id Familia FPP:</strong><br> <input class="inputsform" type="" name="" id="txtIdFPP">
			      	<br>
			      	<strong>Municipio:</strong><br> <input class="inputsform" type="" name="" id="txtMunicipio">
			      	<br>
			      	<strong>Curp:</strong><br> <input class="inputsform" type="" name="" id="txtCurp">
			      	<br>
			      	<strong>Numero de folio:</strong><br> <input class="inputsform" type="" name="" id="txtNumero">
			      	<br>
			      	<strong>Nombre titular:</strong><br> <input class="inputsform" type="" name="" id="txtNombreTitular">
			      	<br>
			      	<strong>Sexo:</strong> <br><input class="inputsform" type="" name="" id="txtSexo">
			      	<br>
			      	<strong>Fecha de nacimiento:</strong><br> <input class="inputsform" type="" name="" id="txtFecha">
			      	<br>
			      	<strong>Nombre conyuge:</strong><br> <input class="inputsform" type="" name="" id="txtNombreConyuge">
			      	<br>
			      	<strong>Productor guia:</strong><br> <input class="inputsform" type="" name="" id="txtProductor">
			      	<br>
			      	<strong>Año de incorporacion:</strong><br> <input class="inputsform" type="" name="" id="txtAño">			  
					<br>
					<br>
					<button id="agregar" type="button" class="btn btn-primary" class='btn btn-danger'  data-dismiss="modal" onclick="actu()">Actualizar</button>
					<br>
					<br>
					<button id="btnCancelar" type="button" class='btn btn-danger'  data-dismiss="modal" >
			       		Cancelar
			      	</button>
			      </div>
			    </div>
			  </div>
			</div>
		</center>



		<div class="modal fade" id="EditarDP" tabindex="-1" role="dialog" aria-labelledby="EditarDP" aria-hidden="true">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			    	<center> 
			    	<div class="modal-header">
			     		<h4 id="tipo"> Editando:</h4>
			     	</div>

			     	<div id="cuerpo" class="modal-body">
				      	<input value="" class="inputsform" type="" name="" id="txtId2">
				      	<br>
				      	<strong> Folio Padron:</strong><br> <input class="inputsform" type="" name="" id="txtFolioPadron">
				      	<br>
				      	<strong> Folio Padron Prestado:</strong><br> <input class="inputsform" type="" name="" id="txtFolioPadronPrestado">
				      	<br>
				      	<strong>Nombre del productor:</strong> <br><input class="inputsform" type="" name="" id="txtNombreProductor">
				      	<br>
				      	<strong>Institucion bancaria:</strong> <br><input class="inputsform" type="" name="" id="txtInstitucionBanc">
				      	<br>
				      	<strong>Titular de la cuenta:</strong> <br><input class="inputsform" type="" name="" id="txtTitularCuenta">
				      	<br><br><br>
				      	<button id="btnAg"  	class="btn btn-primary" class='btn btn-danger'  data-dismiss="modal" onclick="agregarDP()">Agregar</button>
						<button id="btnAc" class="btn btn-primary" class='btn btn-danger'  data-dismiss="modal" onclick="actuDP()">Actualizar</button>
						<button id="btnCancelar" type="button" class='btn btn-danger'  data-dismiss="modal" >
				       		Cancelar
				      	</button>
			    	</div>
			    	</center>
			    </div>
			</div>
		</div>

		<div class="modal fade" id="modalAgregarCAP" tabindex="-1" role="dialog" aria-labelledby="modalAgregarCAp" aria-hidden="true">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			    	<center> 
			    	<div class="modal-header">
			     		<h4 id="ModalTituloCap"> Agregando:</h4>
			     	</div>

			     	<div id="cuerpo" class="modal-body">
				      	<input value=<?php echo $id;  ?> class="inputsform" type="" name="" id="txtId3">
				      	<br>
				      	<strong>Taller:</strong><br> <input class="inputsform" type="" name="" id="txtTaller">
				      	<br>
				      	<strong>Facilitador:</strong><br> <input class="inputsform" type="" name="" id="txtFacilitador">
				      	<br>
				      	<strong>Duración:</strong> <br><input class="inputsform" type="" name="" id="txtDuracion">
				      	<br>
				      	<strong>Fecha:</strong> <br><input class="inputsform" type="" name="" id="txtFechaTall">

				      	<br><br><br>

				      	<button id="btnAgDCAP" class="btn btn-primary" class='btn btn-danger' data-dismiss="modal" onclick="agregarDCAP()">
				      		Agregar
				      	</button>
						<button id="btnAcDCAP" class="btn btn-primary" class='btn btn-danger'  data-dismiss="modal" onclick="actuDCAP()">
							Actualizar
						</button>
						<button id="btnCancelar" type="button" class='btn btn-danger'  data-dismiss="modal" >
				       		Cancelar
				      	</button>
			    	</div>
			    	</center>
			    </div>
			</div>
		</div>

		<div class="modal fade" id="modalAgregarNutricion" tabindex="-1" role="dialog" aria-labelledby="modalAgregarNutricion" aria-hidden="true">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			    	<center> 
			    	<div class="modal-header">
			     		<h4 id="ModalTituloNut"> Agregando:</h4>
			     	</div>

			     	<div id="cuerpo" class="modal-body">
				      	<input value=<?php echo $id;  ?> class="inputsform" type="" name="" id="txtIdNut">
				      	<br>
				      	<strong>Tipo de Producto:</strong><br> <input class="inputsform" type="" name="" id="txtNutTipo">
				      	<br>
				      	<strong>Año:</strong><br> <input class="inputsform" type="" name="" id="txtNutAño">
				      	<br>
				      	<strong>Cantidad:</strong> <br><input class="inputsform" type="" name="" id="txtNutCantidad">
				      	<br>
				      	<br>
				      	<br>
				      	<button id="btnAgNut" class="btn btn-primary" class='btn btn-danger' data-dismiss="modal" onclick="agregarNut()">
				      		Agregar
				      	</button>
						<button id="btnAcNut" class="btn btn-primary" class='btn btn-danger'  data-dismiss="modal" onclick="actuNut()">
							Actualizar
						</button>
						<button id="btnCancelar" type="button" class='btn btn-danger'  data-dismiss="modal" >
				       		Cancelar
				      	</button>
			    	</div>
			    	</center>
			    </div>
			</div>
		</div>


		<div class="modal fade" id="modalAgregarPrevencion" tabindex="-1" role="dialog" aria-labelledby="modalAgregarNutricion" aria-hidden="true">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			    	<center> 
			    	<div class="modal-header">
			     		<h4 id="ModalTituloPrev"> Agregando:</h4>
			     	</div>

			     	<div id="cuerpo" class="modal-body">
				      	<input value=<?php echo $id;  ?> class="inputsform" type="" name="" id="txtIdPrev">
				      	<br>
				      	<strong>Tipo de Producto:</strong><br> <input class="inputsform" type="" name="" id="txtPrevTipo">
				      	<br>
				      	<strong>Año:</strong><br> <input class="inputsform" type="" name="" id="txtPrevAño">
				      	<br>
				      	<strong>Cantidad:</strong> <br><input class="inputsform" type="" name="" id="txtPrevCant">
				      	<br>
				      	<br>
				      	<br>
				      	<button id="btnAgPrev" class="btn btn-primary" class='btn btn-danger' data-dismiss="modal" onclick="agregarPrev()">
				      		Agregar
				      	</button>
						<button id="btnAcPrev" class="btn btn-primary" class='btn btn-danger'  data-dismiss="modal" onclick="actuPrev()">
							Actualizar
						</button>
						<button id="btnCancelar" type="button" class='btn btn-danger'  data-dismiss="modal" >
				       		Cancelar
				      	</button>
			    	</div>
			    	</center>
			    </div>
			</div>
		</div>

<div class="modal fade" id="modalAgregarCafe" tabindex="-1" role="dialog" aria-labelledby="modalAgregarCafe" aria-hidden="true">
			<div class="modal-dialog" role="document">
			    <div class="modal-content">
			    	<center> 
			    	<div class="modal-header">
			     		<h4 id="ModalTituloCafe"> Agregando:</h4>
			     	</div>

			     	<div id="cuerpo" class="modal-body">
				      	<input value=<?php echo $id;  ?> class="inputsform" type="" name="" id="txtIdCafe">
				      	<br>
				      	<strong>Variedad:</strong><br> <input class="inputsform" type="" name="" id="txtCafeVariedad">
				      	<br>
				      	<strong>Año:</strong><br> <input class="inputsform" type="" name="" id="txtCafeAño">
				      	<br>
				      	<strong>Cantidad:</strong> <br><input class="inputsform" type="" name="" id="txtCafeCant">
				      	<br>
				      	<br>
				      	<br>
				      	<button id="btnAgCafe" class="btn btn-primary" class='btn btn-danger' data-dismiss="modal" onclick="agregarCafe()">
				      		Agregar
				      	</button>
						<button id="btnAcCafe" class="btn btn-primary" class='btn btn-danger'  data-dismiss="modal" onclick="actuCafe()">
							Actualizar
						</button>
						<button id="btnCancelar" type="button" class='btn btn-danger'  data-dismiss="modal" >
				       		Cancelar
				      	</button>
			    	</div>
			    	</center>
			    </div>
			</div>
		</div>

	</div>
</body>
</html>
<script type="text/javascript">

function eliminarCafe(id){
	var parametros = {
		"accion" : "-Cafe",
 		"id": id
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								verCafe();
							}
								}
							});
							}



function actuCafe(){
		var parametros = {
			"accion"  : "aCafe",
				"id": $("#txtIdCafe").val(),
			 "variedad" : $("#txtCafeVariedad").val(),
			 "anio" : $("#txtCafeAño").val(),
			 "cantidad" : $("#txtCafeCant").val()
			 
			 
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								verCafe();		
							}
								}
							});



	}




	function editarCafe(id, variedad, anio, cantidad){
		$("#ModalTituloCafe").html("Editando");
		$("#btnAgCafe").hide();
		$("#btnAcCafe").show();
		$("#txtIdCafe").val(id);
		$("#txtCafeVariedad").val(variedad);
		$("#txtCafeAño").val(anio);
		$("#txtCafeCant").val(cantidad);				
}


function cambiarTituloModalCafe(id){
	$("#txtIdCafe").val(id);
	$("#ModalTituloCafe").html("Agregando");
	$("#btnAcCafe").hide();
	$("#btnAgCafe").show();
	$("#txtCafeVariedad").val("");
	$("#txtCafeAño").val("");
	$("#txtCafeCant").val("");
}


	function agregarCafe(){

	var parametros = {
			"accion"  : "+Cafe",
				"id": $("#txtIdCafe").val(),
			 "variedad" : $("#txtCafeVariedad").val(),
			 "anio" : $("#txtCafeAño").val(),
			 "cantidad" : $("#txtCafeCant").val()
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								verCafe();
								 
								
							}
								}
							});
}

	function verCafe(){
	var parametros={				
			"accion" : "verCafe",
			"id": <?php echo $id ?>
				};

		$.ajax({
			data: parametros,
			url:'controlProductor.php',
			type:'POST',
			beforeSend: function(){
				$("#divBaseTabla").html("Espere un momento...");
								  },
			success: function (response){
				if (response!="OK"){
					$("#mensaje").html(response);
									}
										} 
						});
}



function eliminarPrev(id){
	var parametros = {
		"accion" : "-Prev",
 		"id": id
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								verPrevencion();
							}
								}
							});
							}



function actuPrev(){
		var parametros = {
			"accion"  : "aPrev",
				"id": $("#txtIdPrev").val(),
			 "tipo" : $("#txtPrevTipo").val(),
			 "anio" : $("#txtPrevAño").val(),
			 "cantidad" : $("#txtPrevCant").val()
			 
			 
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								verPrevencion();		
							}
								}
							});
	}


function editarPrev(id, tipo, anio, cantidad){
		$("#ModalTituloPrev").html("Editando");
		$("#btnAgPrev").hide();
		$("#btnAcPrev").show();
		$("#txtIdPrev").val(id);
		$("#txtPrevTipo").val(tipo);
		$("#txtPrevAño").val(anio);
		$("#txtPrevCant").val(cantidad);				
}








	function agregarPrev(){

	var parametros = {
			"accion"  : "+Prev",
				"id": $("#txtIdPrev").val(),
			 "tipo" : $("#txtPrevTipo").val(),
			 "anio" : $("#txtPrevAño").val(),
			 "cantidad" : $("#txtPrevCant").val()
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								verPrevencion();
								 
								
							}
								}
							});
}


function cambiarTituloModalPrev(id){
	$("#txtIdPrev").val(id);
	$("#ModalTituloPrev").html("Agregando");
	$("#btnAcPrev").hide();
	$("#btnAgPrev").show();
	$("#txtPrevTipo").val("");
	$("#txtPrevAño").val("");
	$("#txtPrevCant").val("");
}



	function verPrevencion(){
	var parametros={				
			"accion" : "verPrevencion",
			"id": <?php echo $id ?>
				};

		$.ajax({
			data: parametros,
			url:'controlProductor.php',
			type:'POST',
			beforeSend: function(){
				$("#divBaseTabla").html("Espere un momento...");
								  },
			success: function (response){
				if (response!="OK"){
					$("#mensaje").html(response);
									}
										} 
						});
}




function eliminarNut(id){
	var parametros = {
		"accion" : "-Nut",
 		"id": id
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								verNutricion();
							}
								}
							});
							}

function actuNut(){
		var parametros = {
			"accion"  : "aNut",
				"id": $("#txtIdNut").val(),
			 "tipo" : $("#txtNutTipo").val(),
			 "anio" : $("#txtNutAño").val(),
			 "cantidad" : $("#txtNutCantidad").val()
			 
			 
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								verNutricion();		
							}
								}
							});
	}



function editarNut(id, tipo, anio, cantidad){
		$("#ModalTituloNut").html("Editando");
		$("#btnAgNut").hide();
		$("#btnAcNut").show();
		$("#txtIdNut").val(id);
		$("#txtNutTipo").val(tipo);
		$("#txtNutAño").val(anio);
		$("#txtNutCantidad").val(cantidad);				
}




function agregarNut(){

var parametros = {
			"accion"  : "+Nut",
				"id": $("#txtIdNut").val(),
			 "tipo" : $("#txtNutTipo").val(),
			 "anio" : $("#txtNutAño").val(),
			 "cantidad" : $("#txtNutCantidad").val()
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								verNutricion();
								 
								
							}
								}
							});
}



function cambiarTituloModalNut(id){
	$("#txtIdNut").val(id);
	$("#ModalTituloNut").html("Agregando");
	$("#btnAcNut").hide();
	$("#btnAgNut").show();
	$("#txtNutTipo").val("");
	$("#txtNutAño").val("");
	$("#txtNutCantidad").val("");
	
}

	

function verNutricion(){
	var parametros={				
			"accion" : "verNutricion",
			"id": <?php echo $id ?>
				};

		$.ajax({
			data: parametros,
			url:'controlProductor.php',
			type:'POST',
			beforeSend: function(){
				$("#divBaseTabla").html("Espere un momento...");
								  },
			success: function (response){
				if (response!="OK"){
					$("#mensaje").html(response);
									}
										} 
						});
}






	function eliminarCAP(id){
	var parametros = {
		"accion" : "-CAP",
 		"id": id
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								verCapacitaciones();
							}
								}
							});
							}



	function actuDCAP(){
		var parametros = {
			"accion"  : "aDCAP",
				"id": $("#txtId3").val(),
			 "taller" : $("#txtTaller").val(),
			 "facilitador" : $("#txtFacilitador").val(),
			 "duracion" : $("#txtDuracion").val(),
			 "fechaTall": $("#txtFechaTall").val()
			 
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								verCapacitaciones();		
							}
								}
							});
	}


function editarDCAP(id, taller, facilitador, duracion, fecha){
		$("#ModalTituloCap").html("Editando");
		$("#btnAgDCAP").hide();
		$("#btnAcDCAP").show();
		$("#txtId3").val(id);
		$("#txtTaller").val(taller);
		$("#txtFacilitador").val(facilitador);
		$("#txtDuracion").val(duracion);
		$("#txtFechaTall").val(fecha);
		

}

function cambiarTituloModalCAP(id){
	$("#txtId3").val(id);
	$("#ModalTituloCap").html("Agregando");
	$("#btnAcDCAP").hide();
	$("#btnAgDCAP").show();
	$("#txtTaller").val("");
	$("#txtFacilitador").val("");
	$("#txtDuracion").val("");
	$("#txtFechaTall").val("");
}




function	agregarDCAP(){
	
		var parametros = {
			"accion"  : "+DCAP",
				"id": $("#txtId3").val(),
			 "taller" : $("#txtTaller").val(),
			 "facilitador" : $("#txtFacilitador").val(),
			 "duracion" : $("#txtDuracion").val(),
			 "fecha": $("#txtFechaTall").val()
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								 verCapacitaciones();
								
							}
								}
							});


	}

	pBTN1();



function editarDP(id, folioPadron, folioPadronPrestado, nombreProductor, institucionBancaria, titularCuenta){
		$("#btnAg").hide();
		$("#btnAc").show();
		$("#txtId2").val(id);
		$("#txtFolioPadron").val(folioPadron);
		$("#txtFolioPadronPrestado").val(folioPadronPrestado);
		$("#txtNombreProductor").val(nombreProductor);
		$("#txtInstitucionBanc").val(institucionBancaria);
		$("#txtTitularCuenta").val(titularCuenta);
}


function cambiarTitulo(id){
		$("#txtId2").val(id);
		$("#tipo").html("Agregando");
		$("#btnAc").hide();
		$("#btnAg").show();


	}


	function agregarDP(){	

		var parametros = {
			"accion"  : "+DP",
				"id": $("#txtId2").val(),
			 "folioPadron" : $("#txtFolioPadron").val(),
			 "folioPadronPrestado" : $("#txtFolioPadronPrestado").val(),
			 "nombreProductor" : $("#txtNombreProductor").val(),
			 "institucionBancaria": $("#txtInstitucionBanc").val(),
			 "titularCuenta" : $("#txtTitularCuenta").val()
			
 
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								validarDatosPago();
								
							}
								}
							});


	}




	

	function actuDP(){
		var parametros = {
			"accion"  : "aDP",
				"id": $("#txtId2").val(),
			 "folioPadron" : $("#txtFolioPadron").val(),
			 "folioPadronPrestado" : $("#txtFolioPadronPrestado").val(),
			 "nombreProductor" : $("#txtNombreProductor").val(),
			 "institucionBancaria": $("#txtInstitucionBanc").val(),
			 "titularCuenta" : $("#txtTitularCuenta").val()
			
 
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								validarDatosPago();
								
							}
								}
							});



	}

	function ver(){
	var parametros={				
			"accion" : "mostrar",
			"id": <?php echo $id ?>
				};

		$.ajax({
			data: parametros,
			url:'controlProductor.php',
			type:'POST',
			beforeSend: function(){
				$("#divBaseTabla").html("Espere un momento...");
								  },
			success: function (response){
				if (response!="OK"){
					$("#mensaje").html(response);
									}
										} 
						});

}

ver();


	function editarDG(id, nombre, codigo, localidad, estado, idFamiliaFPP, municipio, curp, numeroFolio, nombreTitular, sexo, fechaNacimiento, nombreConyuge, productorGuia, anioIncorporacion){
		$("#txtId").val(id);
		$("#txtNombre").val(nombre);
		$("#txtCodigo").val(codigo);
		$("#txtLocalidad").val(localidad);
		$("#txtEstado").val(estado);
		$("#txtIdFPP").val(idFamiliaFPP);
		$("#txtMunicipio").val(municipio);
		$("#txtCurp").val(curp);
		$("#txtNumero").val(numeroFolio);
		$("#txtNombreTitular").val(nombreTitular);
		$("#txtSexo").val(sexo);
		$("#txtFecha").val(fechaNacimiento);
		$("#txtNombreConyuge").val(nombreConyuge);
		$("#txtProductor").val(productorGuia);
		$("#txtAño").val(anioIncorporacion);
		$("#txtNombre").val(nombre);
	}


function inicio(){
	document.location="principal.php";

}


function cerrarsession(){
	document.location="cerrarSesion.php";
}
	


function actu(){
var parametros = {
"accion"  : "a",
	"id": $("#txtId").val(),
 "nombre" : $("#txtNombre").val(),
 "codigo" : $("#txtCodigo").val(),
 "localidad" : $("#txtLocalidad").val(),
 "estado" : $("#txtEstado").val(),
 "idFamiliaFPP" : $("#txtIdFPP").val(),
 "municipio" : $("#txtMunicipio").val(),
 "curp" : $("#txtCurp").val(),
 "numeroFolio" : $("#txtNumero").val(),
 "nombreTitular" : $("#txtNombreTitular").val(),
 "sexo" : $("#txtSexo").val(),
 "fechaNacimiento" : $("#txtFecha").val(),
 "nombreConyuge" : $("#txtNombreConyuge").val(),
 "productorGuia" : $("#txtProductor").val(),
 "anioIncorporacion" : $("#txtAño").val()
 
	};
	$.ajax({
						data: parametros,
						url:'controlProductor.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#mensaje").html(response);
							if (response.indexOf("OK")>=0){
								ver();
								
							}
								}
							});
}




function validarDatosPago(){

	var parametros={				
			"accion" : "verDatosPago",
			"id": <?php echo $id ?>
				};

		$.ajax({
			data: parametros,
			url:'validarDatosPago.php',
			type:'POST',
			beforeSend: function(){
				$("#divBaseTabla").html("Espere un momento...");
								  },
			success: function (response){
				if (response!="OK"){
					$("#mensaje").html(response);
									}
										} 
						});


}



function pBTN1(){
  btn1 = document.getElementById("btn1");
  btn1.blur();
 document.getElementById("btn1").setAttribute("style", "color: #white; background-color: #00DBAC; width: 80%;");
 document.getElementById("btn2").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn3").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn4").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn5").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn6").setAttribute("style", "color: white; background-color: #043345;");
}

function pBTN2(){
	btn2 = document.getElementById("btn2");
  btn2.blur();
 document.getElementById("btn1").setAttribute("style", "color: white ; background-color: #043345;");
 document.getElementById("btn2").setAttribute("style", "color: white; background-color: #00DBAC; width: 80%;");
 document.getElementById("btn3").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn4").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn5").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn6").setAttribute("style", "color: white; background-color: #043345;");
}

function pBTN3(){
	btn3 = document.getElementById("btn3");
  btn3.blur();
 document.getElementById("btn1").setAttribute("style", "color: white ; background-color: #043345;");
 document.getElementById("btn3").setAttribute("style", "color: white; background-color: #00DBAC; width: 80%;");
 document.getElementById("btn2").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn4").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn5").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn6").setAttribute("style", "color: white; background-color: #043345;");
}

function pBTN4(){
	btn4 = document.getElementById("btn4");
  btn4.blur();
 document.getElementById("btn1").setAttribute("style", "color: white ; background-color: #043345;");
 document.getElementById("btn4").setAttribute("style", "color: white; background-color: #00DBAC; width: 80%;");
 document.getElementById("btn3").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn2").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn5").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn6").setAttribute("style", "color: white; background-color: #043345;");
}

function pBTN5(){
	btn5 = document.getElementById("btn5");
  btn5.blur();
 document.getElementById("btn1").setAttribute("style", "color: white ; background-color: #043345;");
 document.getElementById("btn5").setAttribute("style", "color: white; background-color: #00DBAC; width: 80%;");
 document.getElementById("btn3").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn4").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn2").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn6").setAttribute("style", "color: white; background-color: #043345;");
}

function pBTN6(){
	btn6 = document.getElementById("btn6");
  btn6.blur();
 document.getElementById("btn1").setAttribute("style", "color: white ; background-color: #043345;");
 document.getElementById("btn6").setAttribute("style", "color: #white; background-color: #00DBAC; width: 80%;");
 document.getElementById("btn3").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn4").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn5").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btn2").setAttribute("style", "color: white; background-color: #043345;");


}


function verCapacitaciones(){
var parametros={				
			"accion" : "verCapacitaciones",
			"id": <?php echo $id ?>
				};

		$.ajax({
			data: parametros,
			url:'controlProductor.php',
			type:'POST',
			beforeSend: function(){
				$("#divBaseTabla").html("Espere un momento...");
								  },
			success: function (response){
				if (response!="OK"){
					$("#mensaje").html(response);
									}
										} 
						});

}

function ocultarBTNIns(){

		$("#btnNutri").hide();
		$("#btnPreven").hide();
		$("#btnCafe").hide();
		$("#btnSombra").hide();
		$("#btnMat").hide();
		$("#btnEquip").hide();
		$("#btnVivero").hide();
		$("#btnBenefic").hide();
	}

		ocultarBTNIns()
		
	function mostrarBTNIns(){

		$("#btnNutri").show();
		$("#btnPreven").show();
		$("#btnCafe").show();
		$("#btnSombra").show();
		$("#btnMat").show();
		$("#btnEquip").show();
		$("#btnVivero").show();
		$("#btnBenefic").show();

	}



function CambColor1(){

 document.getElementById("btnNutri").setAttribute("style", "color: #white; background-color: #A00955;");
 document.getElementById("btnPreven").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnCafe").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnSombra").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnMat").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnEquip").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnVivero").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnBenefic").setAttribute("style", "color: white; background-color: #043345;");

}

function CambColor2(){

 document.getElementById("btnPreven").setAttribute("style", "color: #white; background-color: #A00955;");
 document.getElementById("btnNutri").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnCafe").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnSombra").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnMat").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnEquip").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnVivero").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnBenefic").setAttribute("style", "color: white; background-color: #043345;");

}
function CambColor3(){

 document.getElementById("btnCafe").setAttribute("style", "color: #white; background-color: #A00955;");
 document.getElementById("btnPreven").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnNutri").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnSombra").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnMat").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnEquip").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnVivero").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnBenefic").setAttribute("style", "color: white; background-color: #043345;");

}
function CambColor4(){

 document.getElementById("btnSombra").setAttribute("style", "color: #white; background-color: #A00955;");
 document.getElementById("btnPreven").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnCafe").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnNutri").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnMat").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnEquip").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnVivero").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnBenefic").setAttribute("style", "color: white; background-color: #043345;");

}
function CambColor5(){

 document.getElementById("btnMat").setAttribute("style", "color: #white; background-color: #A00955;");
 document.getElementById("btnPreven").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnCafe").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnSombra").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnNutri").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnEquip").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnVivero").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnBenefic").setAttribute("style", "color: white; background-color: #043345;");

}
function CambColor6(){

 document.getElementById("btnEquip").setAttribute("style", "color: #white; background-color: #A00955;");
 document.getElementById("btnPreven").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnCafe").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnSombra").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnMat").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnNutri").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnVivero").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnBenefic").setAttribute("style", "color: white; background-color: #043345;");

}
function CambColor7(){

 document.getElementById("btnVivero").setAttribute("style", "color: #white; background-color: #A00955;");
 document.getElementById("btnPreven").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnCafe").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnSombra").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnMat").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnEquip").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnNutri").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnBenefic").setAttribute("style", "color: white; background-color: #043345;");

}
function CambColor8(){

 document.getElementById("btnBenefic").setAttribute("style", "color: #white; background-color: #A00955;");
 document.getElementById("btnPreven").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnCafe").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnSombra").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnMat").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnEquip").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnVivero").setAttribute("style", "color: white; background-color: #043345;");
 document.getElementById("btnNutri").setAttribute("style", "color: white; background-color: #043345;");

}
	




 

</script>










