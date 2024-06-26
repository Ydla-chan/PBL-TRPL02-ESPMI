@include('layout.p4m.navbar')
<div class="page-content">
    <div class="row">
        <div class="card mb-4">
            <h5 class="card-header">Perbarui Profil</h5>
            <!-- Account -->
            <hr class="my-0">
            <div class="card-body">
                @if(session('success-update-profile'))
                    <div class="alert alert-success">
                        {{ session('success-update-profile') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form id="formAccountSettings" method="POST" action="{{ route('updatep4m') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="id" class="form-label">NIK</label>
                            <input required placeholder="Masukkan NIM" type="text" id="id" name="id" class="form-control @error('id') is-invalid @enderror" value="{{ old('id', $user->NIK) }}" readonly>
                            @error('id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" id="nama" name="nama" @error('nama') is-invalid @enderror value="{{ old('nama', $user->nama) }}" readonly>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="text" class="form-control" placeholder="Masukan E-mail" id="email" name="email" @error('email') is-invalid @enderror value="{{ old('email', $user->email) }}" readonly>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="role" class="form-label">Role</label>
                            <input type="text" class="form-control" placeholder="Masukan Role anda" id="role" name="role" @error('role') is-invalid @enderror value="{{ old('role', $user->role) }}" readonly>
                            @error('role')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="unitkerja" class="form-label">Unit Kerja</label>
                            <input type="text" class="form-control" id="unitkerja" name="unitkerja" value="{{ $unitKerja->nama_unitkerja }}" readonly>
                            @error('unitkerja')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="photo" class="form-label">Upload Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept=".jpg, .jpeg, .png">
                        <small class="text-muted">Format yang harus digunakan: JPG, JPEG, PNG</small>
                        @error('photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <a href="/dashboardP4M" class="btn btn-danger me-2">Kembali</a>
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>