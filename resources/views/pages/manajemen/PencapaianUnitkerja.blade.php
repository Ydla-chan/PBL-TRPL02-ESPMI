@include('layout.manajemen.navbar')
			<div class="page-content">
		                      <div class="row">
                                  <div class="col-12 col-xl-12 grid-margin stretch-card">
                                      <div class="card overflow-hidden">
                                          <div class="card-body">
                                              <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                                                <h6 class="card-title mb-0">Pencapaian Unit kerja</h6>
                                            </div>
                                            <div class="row align-items-start mb-2">
                                                <div class="col-md-7">
                                                    <p class="text-muted tx-13 mb-3 mb-md-0">
                                                        Berikut ini adalah hasil kinerja yang dilakukan oleh seluruh unit kerja 
                                                    </p>
                                                </div>
                                                <div class="col-md-5 d-flex justify-content-md-end">
                                                    <form method="GET" action="{{ url('/unitkerjaa') }}">
                                                        <div class="input-group mb-3">
                                                            <select name="unitkerja" id="unitkerja" class="form-control">
                                                                <option value="">Pilih Unit Kerja</option>
                                                                @foreach($units as $unit)
                                                                <option value="{{ $unit->id_unitkerja }}" {{ $unit->id_unitkerja == $selected_unitkerja ? 'selected' : '' }}>{{ $unit->nama_unitkerja }}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="input-group-append">
                                                                <button class="btn btn-primary" type="submit">Filter</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            @if($selected_unitkerja)
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
                                                    @if($selected_unitkerja)
                                                    var ctx = document.getElementById('myChart').getContext('2d');
                                                    var data = {!! json_encode($data) !!};
                                            
                                                    var labels = ['Triwulan 1', 'Triwulan 2', 'Triwulan 3', 'Triwulan 4'];
                                                    var tercapai = [0, 0, 0, 0];
                                                    var tidak_tercapai = [0, 0, 0, 0];
                                                    var terlampaui = [0, 0, 0, 0];
                                            
                                                    data.forEach(item => {
                                                        tercapai[item.triwulan - 1] = item.tercapai;
                                                        tidak_tercapai[item.triwulan - 1] = item.tidak_tercapai;
                                                        terlampaui[item.triwulan - 1] = item.terlampaui;
                                                    });
                                            
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
                                                    @endif
                                                });
                                            </script>


                                                {{-- <h6 class="card-title mb-0">Pencapaian Unit kerja</h6>
                                              </div>
                                              <div class="row align-items-start mb-2">
                                                  <div class="col-md-7">
                                                      <p class="text-muted tx-13 mb-3 mb-md-0">
                                                        Berikut ini adalah hasil kinerja yang di lakukan oleh seluruh unit kerja 
                                                    </p>
                                                  </div>
                                                  <div class="col-md-5 d-flex justify-content-md-end">
                                                      <form method="GET" action="{{ url('/unitkerja') }}">
                                                          <div class="input-group mb-3">
                                                              <select name="unitkerja" id="unitkerja" class="form-control">
                                                                  <option value="">Semua Unit Kerja</option>
                                                                  @foreach($units as $unit)
                                                                  <option value="{{ $unit->id_unitkerja }}">{{ $unit->nama_unitkerja }}</option>
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
                                                  <canvas id="myChart" width="300" height="100"></canvas>
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
                      
                                  var labels = data.map(item => item.nama_unitkerja);
                                  var tercapai = data.map(item => item.tercapai);
                                  var tidak_tercapai = data.map(item => item.tidak_tercapai);
                                  var terlampaui = data.map(item => item.terlampaui);
                      
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
                          </script> --}}