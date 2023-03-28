<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" 
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Inicio de sesión</title>
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
					<h2>Iniciar</h2>
					<form  action="iSession.php" method="post">
						<div class="inputBox">
							<input type="text" placeholder="Usuario" name="Usuario" id="Usuario">
						</div>
						<div class="inputBox">
							<input type="password" placeholder="Contraseña" name="Contrasena" id="Contrasena">
						</div>
						<div class="inputBox">
							<input type="submit" value="Iniciar">
						</div>
						<p class="forget"><a href="#">¿Olvidaste tu contraseña?</a></p>
						<p class="forget"><a href="register/registro.php">¿No tienes cuenta?</a></p>
					</form>
				</div>
			</div>
		</div>
</section>
</body>
</html>