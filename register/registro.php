<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../mainregistro.css">
	<link rel="stylesheet" 
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Registro de cuenta</title>
</head>
<body>
	<section>
		<div class="color"></div>
		<div class="color"></div>
		<div class="color"></div>
		<div class="box">
			<div class="square" style="--i:0;"></div>
			<div class="square" style="--i:1;"></div>
			<div class="square" style="--i:2;"></div>
			<div class="square" style="--i:3;"></div>
			<div class="square" style="--i:4;"></div>
			<div class="container">	
				<div class="from">
					<h2>Registrar</h2>
					<form method="get" action="register.php">
						<div class="inputBox">
							<input type="text" placeholder="Usuario" name="Usuario">
						</div>
						<div class="inputBox">
							<input type="password" placeholder="Contraseña" name="contrasena">
						</div>
						<div class="inputBox">
							<input type="password" placeholder="Confirmar contraseña" name="cContrasena">
						</div>
						<div class="inputBox">
							<input type="submit" value="Registrar" name="Registrar">
						</div>
					</form>
				</div>
			</div>
		</div>
</section>
</body>
</html>