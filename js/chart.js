// Obtener los datos para el gráfico de tipo F
var resultadosJSONF = <?php echo $json_resultadosF; ?>;
var labelsF = resultadosJSONF.map(item => 'candidata ' + item.voto);
var dataF = resultadosJSONF.map(item => item.cantidad_votos);

// Gráfico para el tipo F
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

// Obtener los datos para el gráfico de tipo M
var resultadosJSONM = <?php echo $json_resultadosM; ?>;
var labelsM = resultadosJSONM.map(item => 'candidato ' + item.voto);
var dataM = resultadosJSONM.map(item => item.cantidad_votos);

// Gráfico para el tipo M
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
