<?php
/*Aqui se requiere el archivo de conexión.
==========================================
the connection file is required.*/
	require '../includes/db.php';

/*verificar si ya se ha iniciado la sesión.
============================================
verify if the session is already started.*/
	if ( isset($_SESSION['user_id']) ) {
		$userId = $_SESSION['user_id'];
		$query = "SELECT * FROM estudiantes  WHERE id = $userId";
		$result = mysqli_query($conn, $query);
		$usuario = mysqli_fetch_array($result);
		/*Si lo está, cargar los datos del usuario.
		===========================================
		if its done, load the user data.*/
		
	}else {
		echo "<h1>NO SIRVE ASI, DEBES REGISTRARTE xD</h1>";
		die("UPS ':D </3 ");
		/*Si nó, error.
		==============
		if NOT, ERROR*/
	}
?>
<a href="../includes/logout.php" class="card-link">Cerrar Sesión</a>