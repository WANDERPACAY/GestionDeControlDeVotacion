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
</head>

<body>
  <div id="topnav" class="navbar">
    <a href="#" class="logo">
      Sistem 卐
      <span style="color: red"> VT</span>
    </a>
    <div class="navbar-right menu">
      <a href="home.php" class="active"> Informacion </a>


      <!--  redirigir a votar.html -->
      <a href="votarM.php">Votar</a>
      </a>

      <a href="grafics.php"> Estadisticas </a>
      <a href="../includes/logout.php"> Cerrar sesion </a>
      <a href="#"> contact programmers </a>
    </div>
    <div class="navbar-right">
      <a href="javascript:void(0);" class="icon" onclick="showMenu()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>

  <div id="slideshow-container" class="slideshow-container">
    <div class="slide-item bgimg fade" ;>
      <div class="caption">
        <h2>Informacion</h2>
        <p>
          lorem ipsum lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum
        </p>
        <button href="votarF.html"><a href="votarM.html"> Estoy listo para votar</a></button>
      </div>
    </div>
  </div>
  <script src="../js/home.js"></script>
</body>

</html>