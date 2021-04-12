<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script src="js/funciones.js"></script>
	<title>Document</title>
</head>
<body >
	<div id="div1" class="container">
		<br>
		<div id="div2">
			<img src="img/kisspng-national-service-of-learning-sena-tecnoparque-educ-logo-h-5b08daed0e2541.879461011527306989058.jpg" width="100" height="100">
			<div id="div3">
				<form id="formulario" method="post" action="menu.php">
					<br>
					<strong class="lgris1">Ingresar</strong>
					<br>
					<label class="lgris">Usuario:</label>
					<br>
					<input  type="text" name="usuario" value="" required="">
					<br>
					<label class="lgris">Contraseña:</label>
					<br>
					<input type="password" name="clave" value="" required="">
					<br><br>
					<input class="btn btn-danger" type="submit" value="Iniciar sesion">
					<br><br>
				</form>
			</div>
		</div>
	</div>
</body>
</html>