@include('layout.manajemen.navbar')
<div class="page-content">
    <div class="row">
        <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                        <h6 class="card-title mb-0">Pencapaian Triwulan</h6>
                    </div>
                    <div class="row align-items-start mb-2">
                        <div class="col-md-7">
                            <p class="text-muted tx-13 mb-3 mb-md-0">Berikut ini adalah hasil kinerja yang di lakukan oleh seluruh unit kerja dalam Triwulan</p>
                        </div>
                        <div class="col-md-5 d-flex justify-content-md-end">
                            {{-- Proses Pengiriman Parameter Triwulan ke Controller  --}}
                            <form method="GET" action="{{ url('/triwulann') }}">
                                <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                                    <select name="triwulan" id="triwulan" class="form-control">
                                        <option value="">Semua</option>
                                        {{-- Opsi Parameter Triwulan  --}}
                                        <option value="1" {{ request('triwulan') == 1 ? 'selected' : '' }}>Triwulan 1</option>
                                        <option value="2" {{ request('triwulan') == 2 ? 'selected' : '' }}>Triwulan 2</option>
                                        <option value="3" {{ request('triwulan') == 3 ? 'selected' : '' }}>Triwulan 3</option>
                                        <option value="4" {{ request('triwulan') == 4 ? 'selected' : '' }}>Triwulan 4</option>
                                    </select>
                                    <button type="submit" class="btn btn-outline-primary">Filter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="flot-wrapper">
                        {{-- Canvas Grafik yang akan ditampilkan  --}}
                        <canvas id="myChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Proses Olah data dari Controller ke bagian View  --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('myChart').getContext('2d');
    var data = {!! json_encode($data) !!};

    var labels = Object.keys(data);
    var tercapai = labels.map(key => data[key].tercapai);
    var tidak_tercapai = labels.map(key => data[key].tidak_tercapai);
    var terlampui = labels.map(key => data[key].terlampui);

    console.log('Labels:', labels);
    console.log('Tercapai:', tercapai);
    console.log('Tidak Tercapai:', tidak_tercapai);
    console.log('Terlampui:', terlampui);

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Tidak Tercapai',
                    data: tidak_tercapai,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Tercapai',
                    data: tercapai,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
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