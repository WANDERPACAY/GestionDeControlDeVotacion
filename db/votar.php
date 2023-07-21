<?php
require '../includes/db.php';

// Verificar si se han enviado los datos a través del método GET
if (isset($_GET['tipo']) && isset($_GET['voto']) && isset($_GET['votante'])) {
    // Recuperar los datos de los parámetros GET y asignarlos a variables
    $tipo = $_GET['tipo'];
    $voto = $_GET['voto'];
    $votante = $_GET['votante'];
    $accion = '1';

    // Consulta SQL para verificar si el votante ya ha votado previamente
    $sql_verificar_votante = "SELECT * FROM votos WHERE votante = '$votante'";

    // Ejecutar la consulta
    $result_verificar_votante = $conn->query($sql_verificar_votante);

    // Verificar si el votante ya ha votado
    if ($result_verificar_votante->num_rows > 0) {
        echo "El votante ya ha realizado un voto anteriormente.";
    } else {
        // Consulta SQL para verificar si el voto ya se ha realizado anteriormente
        $sql_verificar_voto = "SELECT * FROM votos WHERE tipo = '$tipo' AND votante = '$votante' AND accion = '1'";

        // Ejecutar la consulta
        $result_verificar_voto = $conn->query($sql_verificar_voto);

        // Verificar si ya se ha realizado un voto para el mismo tipo
        if ($result_verificar_voto->num_rows > 0) {
            echo "El votante ya ha votado por este tipo de voto anteriormente.";
        } else {
            // Consulta SQL para insertar los datos en la tabla votos
            $sql_insertar = "INSERT INTO votos (tipo, voto, votante, accion) VALUES ('$tipo', '$voto', '$votante', '$accion')";

            if ($conn->query($sql_insertar) === TRUE) {
                echo "Voto realizado exitosamente.";
            } else {
                echo "Error al insertar datos de voto: " . $conn->error;
            }
        }
    }

} else {
    echo "No se han recibido todos los datos requeridos.";
}
?>
