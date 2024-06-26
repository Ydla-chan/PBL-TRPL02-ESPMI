@include('layout.nav')

			<div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0">Manajamen Akun</h4>
          </div>
    
        </div>

        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="row flex-grow">
                  
                  <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                      <thead>
                          <tr>
                              <th>NIK</th>
                              <th>Nama</th>
                              <th>Unit Kerja</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($user as $user)
                              <tr>
                                  <td>{{ $user->id }}</td>
                                  <td>{{ $user->nama }}</td>
                                  <td>{{ $user->unitKerja->nama_unitkerja ?? 'N/A' }}</td>
                                  <td>
                                    <a href="/manajemen/edit/{{ $user->id }}" class="btn  btn-outline-warning btn-edit"><i class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                      <form action="{{ route('manajemenakun.delete', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                    </form>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>

                  <br>
                  <br>
                  <!-- Button trigger modal -->
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahakun">
                    tambah akun
                  </button>
                  
              </div>
             
            </div>
            <div>  
            <br>
          
  <!-- Modal -->
<div class="modal fade" id="tambahakun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Akun </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form id="add-member-form">
                  <div class="form-group">
                      <label for="nim">NIK</label>
                      <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan Nomor Induk Karyawan Anda" required>
                  </div>
                  <div class="form-group">
                      <label for="nama">Unit kerja</label>
                      <select class="form-control" id="id_unitkerja" name="id_unitkerja">
                          <option value="">Silahkan pilih bagian unit kerja</option>
                          @foreach($unitkerja as $unit)
                              <option value="{{ $unit->id_unitkerja }}">
                                  {{ $unit->nama_unitkerja }}
                              </option>
                          @endforeach
                      </select>
                  </div>
                  <br>
                  <button type="button" id="submitBtn" class="btn btn-primary btn-block">Tambahkan</button>
              </form>
          </div>
      </div>
  </div>
</div>

</div>
          </div>
        </div>
        </div>		
		</div>
	</div>
 
 
    

{{-- <!-- Ensure jQuery is included -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<
<script>
$(document).ready(function() {
    $('#submitBtn').click(function(e) {
        e.preventDefault();
        
        let formData = {
            nim: $('#nim').val(),
            id_unitkerja: $('#id_unitkerja').val()
        };

        $.ajax({
            type: 'POST',
            url: '{{ route("manajemenakun.store") }}',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: response.message
                });
                $('#tambahakun').modal('hide');
                // Optionally, refresh the page or update the table
            },
            error: function(response) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'NIK yang anda masukkan sudah terdaftar'
                });
            }
        });
    });
});




</script>



<script>
    