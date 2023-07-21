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
            <a href="../includes/logout.php"> Cerrar sesion </a>
            <a href="#"> contact programmers </a>
        </div>
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
                <img src="../img/candidato3.png" alt="img02">
                <figcaption>
                    <h3>Andrea Granados</h3>
                    <h3>4to Bachillerato en <br>
                        Ciencias Juridicas y Sociales</h3>
                        <a href="../db/votar.php?tipo=f&voto=1&votante=<?php echo $userId; ?>">Votar</a>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="../img/candidato4.png" alt="img04">
                <figcaption>
                    <h3>Anggie Roman</h3>
                    <h3>4to Bachillerato en <br>
                        Computacion </h3>
                        <a href="../db/votar.php?tipo=f&voto=2&votante=<?php echo $userId; ?>">Votar</a>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="../img/candidato5.png" alt="img06">
                <figcaption>
                    <h3>Nancy Chavarria</h3>
                    <h3>5to Bachillerato en <br>
                        Construccion</h3>
                        <a href="../db/votar.php?tipo=f&voto=3&votante=<?php echo $userId; ?>">Votar</a>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="../img/candidato6.png" alt="img05">
                <figcaption>
                    <h3>Suceily Prado</h3>
                    <h3>4to Bachillerato en <br>
                        Ciencias y Diplomado en Medicina</h3>
                        <a href="../db/votar.php?tipo=f&voto=4&votante=<?php echo $userId; ?>">Votar</a>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="../img/candidato7.png" alt="img03">
                <figcaption>
                    <h3>Meredith Mendoza</h3>
                    <h3>3ro Basico</h3>
                    <a href="../db/votar.php?tipo=f&voto=5&votante=<?php echo $userId; ?>">Votar</a>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="../img/candidato11.png" alt="img01">
                <figcaption>
                    <h3>Estafania Hercules</h3>
                    <h3>5to Secretariado y Oficinista<br>
                        con Orientacion Juridica </h3>
                        <a href="../db/votar.php?tipo=f&voto=6&votante=<?php echo $userId; ?>">Votar</a>
                </figcaption>
            </figure>
        </li>
    </ul>
    </div><!-- /container -->
</body>

</html>