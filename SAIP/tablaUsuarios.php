<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Admin</title>
		<link rel="stylesheet"  href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/estilosAdmin.css">
	</head>
	<body>
 		<div id="bloque1">
			<div id="izq">
				<h1  class="page-header" id="SAIP"> Administrador</h1>
				
			</div>
			<div id="cent">
				<img src="img/admin.png" class="img-fluid" alt="Responsive image">
			</div>
			<div id="der">
			<img id="imgfpp" src="img/fpp.png" class="img-fluid" alt="Responsive image">
			 </div>
	   </div>
	   	<center>	
		<br>
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal" onclick="ocultar()" >
	   	Agregar nuevo usuario
	   	</button>
		<br>
		<br>
		<div id="tabla">
					<!-- aqui va la tabla con los datos que nos envia php -->
		</div>

		<br>
		<input type="hidden" name="" id="txtId">

		<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 id="titulo" class="modal-title" id="myModalLabel"></h4>
		      </div>
		      <div id="cuerpo" class="modal-body">
		      	<p> Nombre:</p>
				<input name="txtNombre" type="text" name="" id="txtNombre">
				<p>Usuario:</p>
				<input type="text" name="" id="txtUsuario">
				<p>Contraseña:</p>
				<input type="text" name="" id="txtContrasenia">	
				<br>
				<br>
				<button id="agregar" type="button" class="btn btn-primary" class='btn btn-danger'  data-dismiss="modal" onclick="agregar()">Guardar</button>
				<br>
				<br>
				<button id="actu" type="button" class="btn btn-primary" class='btn btn-danger'  data-dismiss="modal" onclick="actu()">Actualizar</button>
				<div id="mensaje">
				</div>
				<button id="btnCancelar" type="button" class='btn btn-danger'  data-dismiss="modal" >
		       		Cancelar
		      	</button>
		      </div>
		    </div>
		  </div>
		</div>

			
	</body>
</html>

<script type="text/javascript">




function ocultar(){
		$("#txtId").val("");
		$("#txtNombre").val("");
		$("#txtUsuario").val("");
		$("#txtContrasenia").val("");	
		$("#actu").hide();
		$("#titulo").html("Agregando");
		$("#agregar").show();



	}




	function edit(id, nombre){
$("#agregar").hide();	
$("#bt1").show();
$("#bt2").show();
$("#txtId").val(id);
$("#txtNombre").val(nombre);
$("#mensaje").html("EDITANDO");
}


	







function mostrar(){
	var parametros = {
"accion":  "m"
	};
	$.ajax({
						data: parametros,
						url:'controlUsuarios.php',
						type:'POST',
						beforeSend: function(){
							$("#mensaje").html("...");

						}, 
						success: function (response){
							$("#tabla").html(response);
							
								}
							});
							}
							mostrar();







function agregar(){
var parametros ={
	"accion" : "+",
	"nombre": $("#txtNombre").val(),
	"usuario": $("#txtUsuario").val(),
	"contrasenia": $("#txtContrasenia").val()
};

$.ajax({
data: parametros,
						url:'controlUsuarios.php',
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








function eliminar(id){
	var parametros = {
		"accion" : "-",
 		"id": id

	};

	$.ajax({
						data: parametros,
						url:'controlUsuarios.php',
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




function editar(id, nombre, usuario, contrasenia){
	
$("#txtId").val(id);
$("#txtNombre").val(nombre);
$("#txtUsuario").val(usuario);
$("#txtContrasenia").val(contrasenia);
$("#titulo").html("EDITANDO");
$("#actu").show();
$("#agregar").hide();

}	


function actu(){
var parametros = {
"accion"  : "a",
	"id": $("#txtId").val(),
 "nombre" : $("#txtNombre").val(),
 "usuario" : $("#txtUsuario").val(),
 "contrasenia" : $("#txtContrasenia").val()
	};

	$.ajax({
						data: parametros,
						url:'controlUsuarios.php',
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