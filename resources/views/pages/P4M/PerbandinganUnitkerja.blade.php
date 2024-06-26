@include('layout.p4m.navbar')
<div class="page-content">
    <!-- partial -->
    <div class="row">
        <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                        <h6 class="card-title mb-0">Perbandingan Unit Kerja</h6>
                    </div>
                    <div class="row align-items-start mb-2">
                        <div class="col-md-7">
                            <p class="text-muted tx-13 mb-3 mb-md-0">
                                Berikut ini adalah grafik perbandingan antar unit kerja
                            </p>
                        </div>
                        <div class="col-md-5 d-flex justify-content-md-end">
                            <form method="GET" action="{{ url('/perbandingan') }}">
                                <div class="input-group mb-3">
                                    <select name="unitkerja1" id="unitkerja1" class="form-control">
                                        <option value="">Pilih Unit Kerja 1</option>
                                        @foreach($units as $unit)
                                        <option value="{{ $unit->id_unitkerja }}" {{ $unit->id_unitkerja == $selectedUnitkerja1 ? 'selected' : '' }}>
                                            {{ $unit->nama_unitkerja }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <select name="unitkerja2" id="unitkerja2" class="form-control ml-2">
                                        <option value="">Pilih Unit Kerja 2</option>
                                        @foreach($units as $unit)
                                        <option value="{{ $unit->id_unitkerja }}" {{ $unit->id_unitkerja == $selectedUnitkerja2 ? 'selected' : '' }}>
                                            {{ $unit->nama_unitkerja }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <select name="triwulan" id="triwulan" class="form-control ml-2">
                                        <option value="">Pilih Triwulan</option>
                                        <option value="1" {{ $selectedTriwulan == 1 ? 'selected' : '' }}>Triwulan 1</option>
                                        <option value="2" {{ $selectedTriwulan == 2 ? 'selected' : '' }}>Triwulan 2</option>
                                        <option value="3" {{ $selectedTriwulan == 3 ? 'selected' : '' }}>Triwulan 3</option>
                                        <option value="4" {{ $selectedTriwulan == 4 ? 'selected' : '' }}>Triwulan 4</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if($selectedUnitkerja1 && $selectedUnitkerja2)
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
    @if($selectedUnitkerja1 && $selectedUnitkerja2)
    var ctx = document.getElementById('myChart').getContext('2d');
    var data = {!! json_encode($data) !!};

    var labels = ['Triwulan 1', 'Triwulan 2', 'Triwulan 3', 'Triwulan 4'];
    var tercapai1 = [0, 0, 0, 0];
    var tidak_tercapai1 = [0, 0, 0, 0];
    var terlampaui1 = [0, 0, 0, 0];
    var tercapai2 = [0, 0, 0, 0];
    var tidak_tercapai2 = [0, 0, 0, 0];
    var terlampaui2 = [0, 0, 0, 0];

    // Store selected unit kerja names
    var unitKerjaNames = {
        unitkerja1: '',
        unitkerja2: ''
    };

    data.forEach(item => {
        if (item.id_unitkerja == {{ $selectedUnitkerja1 }}) {
            tercapai1[item.triwulan - 1] = item.tercapai;
            tidak_tercapai1[item.triwulan - 1] = item.tidak_tercapai;
            terlampaui1[item.triwulan - 1] = item.terlampaui;
            unitKerjaNames.unitkerja1 = item.nama_unitkerja; // Get name for unit kerja 1
        }
        if (item.id_unitkerja == {{ $selectedUnitkerja2 }}) {
            tercapai2[item.triwulan - 1] = item.tercapai;
            tidak_tercapai2[item.triwulan - 1] = item.tidak_tercapai;
            terlampaui2[item.triwulan - 1] = item.terlampaui;
            unitKerjaNames.unitkerja2 = item.nama_unitkerja; // Get name for unit kerja 2
        }
    });

    var selectedTriwulan = {{ $selectedTriwulan }};
    if (selectedTriwulan > 0) {
        labels = ['Triwulan ' + selectedTriwulan];
        tercapai1 = [tercapai1[selectedTriwulan - 1]];
        tidak_tercapai1 = [tidak_tercapai1[selectedTriwulan - 1]];
        terlampaui1 = [terlampaui1[selectedTriwulan - 1]];
        tercapai2 = [tercapai2[selectedTriwulan - 1]];
        tidak_tercapai2 = [tidak_tercapai2[selectedTriwulan - 1]];
        terlampaui2 = [terlampaui2[selectedTriwulan - 1]];
    }

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [unitKerjaNames.unitkerja1, unitKerjaNames.unitkerja2], // Use dynamic unit kerja names
            datasets: [
                {
                    label: 'Tercapai',
                    data: [tercapai1.reduce((a, b) => a + b, 0), tercapai2.reduce((a, b) => a + b, 0)],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Tidak Tercapai',
                    data: [tidak_tercapai1.reduce((a, b) => a + b, 0), tidak_tercapai2.reduce((a, b) => a + b, 0)],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Terlampaui',
                    data: [terlampaui1.reduce((a, b) => a + b, 0), terlampaui2.reduce((a, b) => a + b, 0)],
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
    @endif
});
</script>