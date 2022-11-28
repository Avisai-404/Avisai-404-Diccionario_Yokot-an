<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM palabras WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="palabra" class="col-sm-2 control-label">Palabra*</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="palabra" name="palabra" placeholder="Palabra" value="<?php echo $row['Palabra']; ?>" required>
					</div>
				</div>

				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="significado" class="col-sm-2 control-label">Significado*</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="significado" name="significado" placeholder="Significado" value="<?php echo $row['Significado']; ?>"required>
					</div>
					</div>		
			
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>