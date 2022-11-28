<?php
 
	require 'conexion.php';
	$id = $_POST['id'];
	$Palabra = $_POST['palabra'];
	$Significado = $_POST['significado'];

	$sql = "UPDATE palabras SET palabra='$Palabra', significado='$Significado' WHERE id='$id'";
	$resultado = $mysqli->query($sql);
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>YA ESTA REGISTRADO ESTA MISMA PALABRA</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>