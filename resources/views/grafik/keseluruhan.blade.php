@include('layout.nav')
			<div class="page-content">
			<!-- partial -->

        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">

<h6 class="card-title mb-0">Status Pengisian Per Triwulan</h6>
</div>
<div class="row align-items-start mb-2">
    <div class="col-md-7">
        <p class="text-muted tx-13 mb-3 mb-md-0">
            Grafik ini menunjukkan status pengisian per triwulan untuk setiap unit kerja.
        </p>
    </div>
    <div class="col-md-5 d-flex justify-content-md-end">
        <form method="GET" action="{{ url('/PengisianTriwulan') }}">
            <div class="input-group mb-3">
                <select name="unitkerja" id="unitkerja" class="form-control">
                    <option value="">Semua Unit Kerja</option>
                    @foreach($units as $unit)
                    <option value="{{ $unit->id_unitkerja }}" {{ $unit->id_unitkerja == $selectedUnitkerja ? 'selected' : '' }}>
                        {{ $unit->nama_unitkerja }}
                    </option>
                    @endforeach
                </select>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Filter</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="flot-wrapper">
    <canvas id="myChart" width="400" height="200"></canvas>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
var ctx = document.getElementById('myChart').getContext('2d');
var data = {!! json_encode($data) !!};

var labels = ['Triwulan 1', 'Triwulan 2', 'Triwulan 3', 'Triwulan 4'];
var terisiData = [0, 0, 0, 0];
var tidakTerisiData = [0, 0, 0, 0];

data.forEach(item => {
    if (item.triwulan == 1) {
        terisiData[0] = item.terisi;
        tidakTerisiData[0] = item.tidak_terisi;
    } else if (item.triwulan == 2) {
        terisiData[1] = item.terisi;
        tidakTerisiData[1] = item.tidak_terisi;
    } else if (item.triwulan == 3) {
        terisiData[2] = item.terisi;
        tidakTerisiData[2] = item.tidak_terisi;
    } else if (item.triwulan == 4) {
        terisiData[3] = item.terisi;
        tidakTerisiData[3] = item.tidak_terisi;
    }
});

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [
            {
                label: 'Terisi',
                data: terisiData,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            },
            {
                label: 'Tidak Terisi',
                data: tidakTerisiData,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
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