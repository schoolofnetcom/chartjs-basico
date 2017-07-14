<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<canvas id="meuChart"></canvas>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
<script type="text/javascript">
    var canvas = document.getElementById("meuChart");
    var data = <?php include __DIR__ . '/ibge_json_data.php'; ?>;
    var myChart = new Chart(canvas, {
        type: 'line',
        data: {
            labels: data.anos,
            datasets: [
                {
                    label: 'População',
                    data: data.populacao
                }
            ]
        }
    });
//JSON - Javascript Object Notation
</script>
</body>
</html>