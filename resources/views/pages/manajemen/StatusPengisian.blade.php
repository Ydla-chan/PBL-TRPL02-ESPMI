@include('layout.manajemen.navbar')
			<div class="page-content">
			<!-- partial -->

        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                            <h6 class="card-title mb-0">Status Pengisian</h6>
                        </div>
                        <div class="row align-items-start mb-2">
                            <div class="col-md-7">
                                <p class="text-muted tx-13 mb-3 mb-md-0">
                                    Berikut ini adalah status pengisian yang dilakukan oleh unit kerja
                                </p>
                            </div>
                            <div class="col-md-5 d-flex justify-content-md-end">
                                <form method="GET" action="{{ url('/pengisiann') }}">
                                    <div class="input-group mb-3">
                                        <select name="unitkerja" id="unitkerja" class="form-control">
                                            <option value="">Pilih Unit Kerja</option>
                                            @foreach($units as $unit)
                                            <option value="{{ $unit->id_unitkerja }}" {{ $unit->id_unitkerja == $selectedUnitkerja ? 'selected' : '' }}>{{ $unit->nama_unitkerja }}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if($selectedUnitkerja)
                        <div class="flot-wrapper">
                            <canvas id="myChart" width="400" height="100"></canvas>
                        </div>
                        @endif
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                @if($selectedUnitkerja)
                                var ctx = document.getElementById('myChart').getContext('2d');
                                var data = {!! json_encode($data) !!};
                        
                                var labels = ['Triwulan 1', 'Triwulan 2', 'Triwulan 3', 'Triwulan 4'];
                                var terisi = [0, 0, 0, 0];
                                var tidak_terisi = [0, 0, 0, 0];
                        
                                data.forEach(item => {
                                    terisi[item.triwulan - 1] = item.terisi;
                                    tidak_terisi[item.triwulan - 1] = item.tidak_terisi;
                                });
                        
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: labels,
                                        datasets: [
                                            {
                                                label: 'Terisi',
                                                data: terisi,
                                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                                borderColor: 'rgba(75, 192, 192, 1)',
                                                borderWidth: 1
                                            },
                                            {
                                                label: 'Tidak Terisi',
                                                data: tidak_terisi,
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
                                @endif
                            });
                        </script>
