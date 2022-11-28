<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="palabra" class="col-sm-2 control-label">Palabra*</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="palabra" name="palabra" placeholder="Palabra" required>
					</div>
				</div>

				<div class="form-group">
					<label for="significado" class="col-sm-2 control-label">Siginificado*</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="significado" name="significado" placeholder="Siginificado" required>
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