<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script src="js/funciones.js"></script>
	<title>Eliminacion de ficha</title>
</head>
<body>
	<div id="divconsulta" class="container">
		<br>
		<div id="div2">
			<div id="div4">
				<form name="formulario" role="form" method="post">
					<div class="col-md-12">
						<strong class="lgris"> Ingrese criterio de busqueda  </strong>
						<br><br>
						<div class="form-row">
							<div class="form-group col-md-3">
								<input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="N° FICHA">
							</div>
							
							<div class="form-group col-md-3">
								<input class="btn btn-primary" type="submit" value="BORRAR">
							</div>
						</div>
						<br>
					</div>
				</form>
				<br>
			</div>
			<div id="divconsulta2">
				<?php 
				if  ($_SERVER=['RESQUEST_METHOD']==='POST') 
				{
					include 'funciones.php';
					$vnumid=$_POST['numid'];
					$miconexion=conectar_bd('1234', 'sena_bd');
					$resultado=consulta($miconexion,"select * from aprendices where Apre_Numid='{$vnumid}'");
					$resultado=consulta($miconexion,"delete from aprendices where Apre_Numid='{$vnumid}'");
					if ($resultado->num_rows>0) 
					{
						while ($fila = $resultado->fetch_object()) 
						{
							echo $fila->Apre_id." ".$fila->Apre_Tipoid." ".$fila->Apre_Numid." ".$fila->Apre_Nombres." ".$fila->Apre_Apellidos." ".$fila->Apre_Direccion." ".$fila->Apre_Telefono." ".$fila->Apre_Ficha."<br>";
							if ($resultado)
							echo "<br> Datos borrados exitosamente";
						}
					}
					        else 
					  {
						echo "No existen registros";
					  }
					$miconexion->close();
				}
				 ?>
			</div>
		</div>
	</div>
	
 </body>
</html>