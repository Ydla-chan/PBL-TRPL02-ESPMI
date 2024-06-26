<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart with Filter</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <form method="GET" action="{{ url('/triwulan') }}">
        <label for="triwulan">Pilih Triwulan:</label>
        <select name="triwulan" id="triwulan">
            <option value="">Semua</option>
            <option value="1">Triwulan 1</option>
            <option value="2">Triwulan 2</option>
            <option value="3">Triwulan 3</option>
            <option value="4">Triwulan 4</option>
        </select>
        <button type="submit">Filter</button>
    </form>

    <canvas id="myChart" width="400" height="200"></canvas>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('myChart').getContext('2d');
            var data = {!! json_encode($data) !!};

            var labels = Object.keys(data);
            var tercapai = labels.map(key => data[key].tercapai);
            var tidak_tercapai = labels.map(key => data[key].tidak_tercapai);
            var terlampui = labels.map(key => data[key].terlampui);

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Tercapai',
                            data: tercapai,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Tidak Tercapai',
                            data: tidak_tercapai,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Terlampui',
                            data: terlampui,
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
