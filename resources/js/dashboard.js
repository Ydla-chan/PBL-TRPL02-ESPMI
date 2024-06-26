@if(session('loginSuccess'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Login Berhasil',
            text: '{{ session('loginSuccess') }}',
        });
    </script>
@endif

@if(session('loginError'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Login Gagal',
            text: '{{ session('loginError') }}',
        });
    </script>
@endif
