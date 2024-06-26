@include('layout.p4m.navbar')

<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Perbarui Akun</h6>
                    <form method="POST" action="{{ route('manajemenakun.update', $user->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama Lengkap" id="nama" name="nama" value="{{ old('nama', $user->nama) }}"readonly>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="id">NIK <b class="text-danger">*</b></label>
                            <input required type="text" class="form-control @error('NIk') is-invalid @enderror" id="id" name="id" placeholder="Masukkan NIM" value="{{ old('id', $user->NIK) }}" readonly>
                            @error('id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="role">Jabatan</label>
                            <input type="text" class="form-control @error('role') is-invalid @enderror" placeholder="Masukan Jabatan Lengkap" id="role" name="role" value="{{ old('role', $user->role) }}"readonly>
                            @error('role')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="id_unitkerja">Unit Kerja</label>
                            <select class="form-control @error('id_unitkerja') is-invalid @enderror" id="id_unitkerja" name="id_unitkerja">
                                @foreach($unitkerja as $unit)
                                    <option value="{{ $unit->id_unitkerja }}" {{ old('id_unitkerja', $user->id_unitkerja) == $unit->id_unitkerja ? 'selected' : '' }}>
                                        {{ $unit->nama_unitkerja }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_unitkerja')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <a href="/manajemen" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-success">Perbarui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>