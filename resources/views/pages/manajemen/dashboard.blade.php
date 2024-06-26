
@include('layout.manajemen.navbar')

			<div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Selamat Datang, {{ Session::get('Name') }}</h4>  
          </div>
    
        </div>
        <div class="row">
          <div class="col-12 col-l-12 grid-margin stretch-card">
              <div class="card overflow-hidden">
                  <div class="card-body">
                     

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/images/dashboard/gambar1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/images/dashboard/gambar2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/images/dashboard/gambar4.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
        
    </div>
        

        

        {{-- <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Jumlah unit Kerja</h6>
                   
                    </div>
                    <div class="row">
                      <div class="col-6 col-mdd-12 col-m-5">
                        <br>
                        <h3 class="mb-2">28</h3>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Jumlah Karyawan Aktif</h6>
                     
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <br>
                        <h3 class="mb-2">834</h3>
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Jumlah Mahasiswa Aktif</h6>
                    
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <br>
                        <h3 class="mb-2">9,450</h3>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
          
        </div> <!-- row -->

  </div>
	</div>
	</div>

	 