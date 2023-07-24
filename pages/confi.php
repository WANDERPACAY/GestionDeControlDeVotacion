<?php
/*Aqui se requiere el archivo de conexión.
==========================================
the connection file is required.*/
require '../includes/db.php';

/*verificar si ya se ha iniciado la sesión.
============================================
verify if the session is already started.*/
if (isset($_SESSION['user_id'])) {
  $userId = $_SESSION['user_id'];
  $query = "SELECT * FROM estudiantes  WHERE id = $userId";
  $result = mysqli_query($conn, $query);
  $usuario = mysqli_fetch_array($result);
  /*Si lo está, cargar los datos del usuario.
    ===========================================
    if its done, load the user data.*/

} else {
  header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>casi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/home.css" />
  <link rel="stylesheet" href="../css/confi.css">
</head>

<body>
<a href="home.php" class="corner-button" role="button">
  <span>VOTO YA REALIZADO</span>
</a>

</body>

</html>