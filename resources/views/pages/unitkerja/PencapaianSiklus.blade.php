@include('layout.unitkerja.navbar')
			<div class="page-content">


        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">

                                        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                                            <h6 class="card-title mb-0">Pencapaian Siklus</h6>
                                        </div>
                                        <div class="row align-items-start mb-2">
                                            <div class="col-md-7">
                                                <p class="text-muted tx-13 mb-3 mb-md-0">
                                                  berikut ini adalah hasil capaian yang di lakukan unit kerja berdasarkan Siklus 
                                                </p>
                                            </div>
                                            <div class="col-md-5 d-flex justify-content-md-end">
                                                <form method="GET" action="{{ url('/siklus') }}">
                                                    <div class="input-group mb-3">
                                                        <select name="siklus" id="siklus" class="form-control">
                                                            <option value="">Pilih Siklus</option>
                                                            <option value="1" {{ request('siklus') == 1 ? 'selected' : '' }}>Penetapan</option>
                                                            <option value="2" {{ request('siklus') == 2 ? 'selected' : '' }}>Pelaksanaan</option>
                                                            <option value="3" {{ request('siklus') == 3 ? 'selected' : '' }}>Evaluasi</option>
                                                            <option value="4" {{ request('siklus') == 4 ? 'selected' : '' }}>Pengendalian</option>
                                                            <option value="4" {{ request('siklus') == 5 ? 'selected' : '' }}>Peningkatan</option>
                                                        </select>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="submit">Filter</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="flot-wrapper">
                                            <canvas id="myChart" width="400" height="100"></canvas>
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
                
                            var labels = data.map(item => item.nama_siklus);
                            var tercapai = data.map(item => item.tercapai);
                            var tidak_tercapai = data.map(item => item.tidak_tercapai);
                            var terlampaui = data.map(item => item.terlampaui);
                
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
                                            label: 'Terlampaui',
                                            data: terlampaui,
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

