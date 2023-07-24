<?php
// Conexión a la base de datos
include "../includes/db.php";

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Consulta SQL para el tipo "F"
$sqlF = "SELECT voto, COUNT(*) AS cantidad_votos FROM votos WHERE tipo = 'F' GROUP BY voto";
$resultF = $conn->query($sqlF);

// Consulta SQL para el tipo "M"
$sqlM = "SELECT voto, COUNT(*) AS cantidad_votos FROM votos WHERE tipo = 'M' GROUP BY voto";
$resultM = $conn->query($sqlM);

// Obtener los resultados para el tipo "F" y almacenarlos en un array asociativo
$resultadosF = array();
if ($resultF->num_rows > 0) {
    while ($row = $resultF->fetch_assoc()) {
        $resultadosF[] = $row;
    }
}

// Obtener los resultados para el tipo "M" y almacenarlos en un array asociativo
$resultadosM = array();
if ($resultM->num_rows > 0) {
    while ($row = $resultM->fetch_assoc()) {
        $resultadosM[] = $row;
    }
}

// Convertir los resultados a formato JSON
$json_resultadosF = json_encode($resultadosF);
$json_resultadosM = json_encode($resultadosM);

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultados de Votos por Candidato y Tipo</title>
    <!-- Agrega el script de la librería Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Resultados de Votos por Candidato y Tipo</h1>
    <h2>Tipo F</h2>
    <canvas id="voteF" width="400" height="400"></canvas>
    <h2>Tipo M</h2>
    <canvas id="voteM" width="400" height="400"></canvas>
    <script>
        // Nombres de los candidatos y candidatas
const candidatos = ['german', 'herry', 'jan', 'lizardo', 'martin', 'samily'];
const candidatas = ['andrea', 'anggie', 'nancy', 'suceily', 'meredith', 'estefania'];

// Obtener los datos para el gráfico de tipo F (candidatas)
var resultadosJSONF = <?php echo $json_resultadosF; ?>;
var labelsF = resultadosJSONF.map((item, index) => candidatas[index]);
var dataF = resultadosJSONF.map(item => item.cantidad_votos);

// Gráfico para el tipo F (candidatas)
const ctxF = document.getElementById('voteF');
const voteF = new Chart(ctxF, {
    type: 'doughnut',
    data: {
        labels: labelsF,
        datasets: [{
            label: '# of Votes',
            data: dataF,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Obtener los datos para el gráfico de tipo M (candidatos)
var resultadosJSONM = <?php echo $json_resultadosM; ?>;
var labelsM = resultadosJSONM.map((item, index) => candidatos[index]);
var dataM = resultadosJSONM.map(item => item.cantidad_votos);

// Gráfico para el tipo M (candidatos)
const ctxM = document.getElementById('voteM');
const voteM = new Chart(ctxM, {
    type: 'doughnut',
    data: {
        labels: labelsM,
        datasets: [{
            label: '# of Votes',
            data: dataM,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

    </script>    
</body>
</html>