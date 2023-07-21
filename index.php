<?php
/*Aqui se requiere el archivo de conexión.
==========================================
the connection file is required.*/
require 'includes/db.php';

/*verificar si ya se ha iniciado la sesión.
============================================
verify if the session is already started.*/
if (isset($_SESSION['user_id'])) {
    header("Location: pages/home.php");
    /*Si lo está, redirigir a usercreated.php
          =========================================
          if its done, redirect to usercreated.php*/
} else {
    /*Si nó, cargar esta página.
          ===========================
          if Not, load this page.*/
    header("Location: pages/login.php");
} ?>