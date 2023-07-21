<?php
/* Aquí se requiere el archivo de conexión.
==========================================
The connection file is required. */
require '../includes/db.php';

/* Verificar si ya se ha iniciado la sesión.
============================================
Verify if the session is already started. */
if (isset($_SESSION['user_id'])) {
	header("home.php");
	/* Si lo está, redirigir a usercreated.php
		  =========================================
		  If it's done, redirect to usercreated.php */
} else {
	/* Si no, cargar esta página.
		  ===========================
		  If not, load this page. */

	if (!empty($_POST['carne']) && !empty($_POST['fecha'])) {

		$carne = $_POST['carne']; // Se corrige el nombre de la variable a $carne
		$fecha = $_POST['fecha']; // Se corrige el nombre de la variable a $fecha

		$query = "SELECT id, carne, fecha FROM estudiantes WHERE carne = '$carne' AND fecha = '$fecha' ";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) {
			$usuario = mysqli_fetch_array($result);
			$_SESSION['user_id'] = $usuario['id'];
			$_SESSION['mensaje'] = 'Sesión iniciada';
			header("Location: home.php");
		} else {
			echo "Usuario o fecha incorrectos"; // Agregar mensaje de error en caso de no encontrar el usuario
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/login.css">
	<title>Iniciar Sesion</title>
</head>

<body>
	<script src="https://kit.fontawesome.com/ab00d86059.js" crossorigin="anonymous"></script>
	<img class="wave"
		src="https://raw.githubusercontent.com/Jhonierpc/WebDevelopment/master/Login%20Responsive/img/wave.png" alt="">
	<div class="container">
		<div class="img">
			<img src="../img/fondo.png" alt="fondo">
		</div>
		<div class="login-container">
			<form action="login.php" method="post">
				<img class="avatar" src="../img/user.png" alt="Imagen de avatar">
				<h2>Bienvenido</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div>
						<h5>Codigo MINEDUC</h5>
						<input class="input" type="text" placeholder="Codigo" name="carne">
					</div>
				</div>
				<div class="input-div two">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div>
						<h5>Fecha Nacimiento</h5>
						<input class="input" type="date" name="fecha">
					</div>
				</div>
				<a href="#">Info</a>
				<input class="btn" type="submit" value="Login">
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/main.js"></script>
</body>

</html>