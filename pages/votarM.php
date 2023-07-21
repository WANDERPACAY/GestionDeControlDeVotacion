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
    echo "<h1>NO SIRVE ASI, DEBES REGISTRARTE xD</h1>";
    die("UPS ':D </3 ");
    /*Si nó, error.
          ==============
          if NOT, ERROR*/
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidatos</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/default.css" />
    <link rel="stylesheet" type="text/css" href="../css/component.css" />
    <link rel="stylesheet" type="text/css" href="../css/home.css" />
    <script src="../js/modernizr.custom.js"></script>
</head>

<body>
    <div id="topnav" class="navbar">
        <a href="#" class="logo">
            Sistem 卐
            <span style="color: red"> VT</span>
        </a>
        <div class="navbar-right menu">
            <a href="home.php"> Informacion </a>


            <!--  redirigir a votar.html -->
            <a href="votarM.php" class=" active">Votar</a>
            </a>

            <a href="#"> Estadisticas </a>
            <a href="../include/logout.php"> Cerrar sesion </a>
            <a href="#"> contact programmers </a>
        </div>
    </div>

    <header> <br> <br>
        <br> <br> <br>
        <center>
            <h1>PARTICIPANTES</h1>
            <nav class="codrops-demos">
                <a class="btn btn-outline-danger" href="votarM.php">Candidatos</a>
                <a href="votarF.php">Candidatas</a>
        </center>
        </nav>
    </header>
    <ul class="grid cs-style-2">
        <li>
            <figure>
                <img src="../img/candidato1.png" alt="img02">
                <figcaption>
                    <h3>German Contreras </h3>
                    <h3>1o. Basico</h3>
                    <a href="../db/votar.php?tipo=m&voto=1&votante=<?php echo $userId; ?>">Votar</a>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="../img/candidato2.png" alt="img04">
                <figcaption>
                    <h3>Herry Alvarado </h3>
                    <h3>5to Bachillerato en <br>
                        Computacion</h3>
                    <a href="../db/votar.php?tipo=m&voto=2&votante=<?php echo $userId; ?>">Votar</a>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="../img/candidato10.png" alt="img06">
                <figcaption>
                    <h3>Jan Vielman</h3>
                    <h3>6to Bachillerato Industrial <br>
                        y Perito en Mecanica Automotriz</h3>
                    <a href="../db/votar.php?tipo=m&voto=3&votante=<?php echo $userId; ?>">Votar</a>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="../img/candidato9.png" alt="img05">
                <figcaption>
                    <h3>Lizardo Winter</h3>
                    <h3>5to Bachiller Industrial y Perito<br>
                        con Especialidad en Computacion</h3>
                    <a href="../db/votar.php?tipo=m&voto=4&votante=<?php echo $userId; ?>">Votar</a>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="../img/candidato8.png" alt="img03">
                <figcaption>
                    <h3>Martin Thomae</h3>
                    <h3>5to Perito en Electronica </h3>
                    <a href="../db/votar.php?tipo=m&voto=5&votante=<?php echo $userId; ?>">Votar</a>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="../img/candidato12.png" alt="img01">
                <figcaption>
                    <h3>Smaily Izaguirre</h3>
                    <h3>5to Perito en Electronica</h3>
                    <a href="../db/votar.php?tipo=m&voto=6&votante=<?php echo $userId; ?>">Votar</a>
                </figcaption>
            </figure>
        </li>
    </ul>
    </div><!-- /container -->

</body>

</html>