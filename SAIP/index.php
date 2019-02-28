<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>SAIP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min,js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<link rel="stylesheet" type="text/css" href="css/ESTIndex.css">
</head>

<body>
	<div id="b1" class="page-header">
		<table id="table">
			<tr>
				<td id="izq">
					<img width="300" src="img/fpp2.png" class="img-fluid#C3ECF5" alt="Responsive image">
				</td>
				<td id="cent">SAIP</td>
				<td id="der"></td>
			</tr>
		</table>
	</div>


	<center>
		<div id="principal">
			<h2> Bienvenido</h2>
			<img src="img/log2.png">
			<br>
			<input type="text" onkeyup="mayus(this);" id="usuario" placeholder="Ingresa tu nombre de usuario" /><br />
			<br>
			<input type="password" id="contrasenia" placeholder="Ingresa tu contraseña" />
			<br>
			<br>
			<button  onclick="validar()">INGRESAR</button>
			<br>
			<br>
			<br>
			<div id="mensaje"></div>
			<br>
		</div>
	</center>
</body>

</html>
<script>
function mayus(e) {
    e.value = e.value.toUpperCase();
}

	function validar(){
						var parametros={
							"usuario" : $("#usuario").val(),
							"contrasenia" : $("#contrasenia").val()
										}
										;
						$.ajax({
									data: parametros,
									url:'validarUsuario.php',
									type:'POST',

									beforeSend: function(){
										$("#mensaje").html("Validando...");
														  },
									success: function (response){
										if (response!="OK"){
											$("#mensaje").html(response);
															}
										else{
											if($("#usuario").val() == "MAURI"){
												document.location= "admin.php";
											}
											else{
												document.location="principal.php";												
											}
											}
																} 
							
						});
				}
</script>