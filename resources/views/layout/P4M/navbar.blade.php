<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-SPMI Polibatam</title>
    <link rel="stylesheet" href="/vendors/core/core.css">
    <link rel="stylesheet" href="/css/style-dashboard.css">
    <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- Include SweetAlert CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <div class="main-wrapper">
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="/dashboardP4M" class="sidebar-brand">
                    E-SPMI
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="/dashboardP4M" class="nav-link">
                            <i class="link-icon" data-feather="home"></i>
                            <span class="link-title">Beranda</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#tables" role="button" aria-expanded="false"
                            aria-controls="tables">
                            <i class="link-icon" data-feather="pie-chart"></i>
                            <span class="link-title">Statistik</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="/triwulan" class="nav-link">Pencapaian Per Triwulan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/standar   " class="nav-link">Pencapaian Per Standar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/siklus" class="nav-link">Pencapaian Per Siklus</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/unitkerja   " class="nav-link">Pencapain Unit Kerja</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pengisian" class="nav-link">Status Pengisian Capaian</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/perbandingan" class="nav-link">Perbandingan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#authPages" role="button"
                            aria-expanded="false" aria-controls="authPages">
                            <i class="link-icon" data-feather="sliders"></i>
                            <span class="link-title">Pengelolan</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="authPages">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="/manajemen" class="nav-link">Kelola Akun Unit Kerja</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="/manajemen" class="nav-link">Kelola  Unit Kerja</a>
                                </li> --}}
                            </ul>
                        </div>
                    </li>

            </div>
        </nav>
        @include('layout.p4M.head')

        <!-- SweetAlert for flash messages -->
        @if (Session::has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ Session::get('success') }}'
                });
            </script>
        @endif

        @if (Session::has('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ Session::get('error') }}'
                });
            </script>
        @endif

        @if ($errors->any())
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ $errors->first() }}'
                });
            </script>
        @endif
        <script src="/vendors/core/core.js"></script>
        <script src="/vendors/chartjs/Chart.min.js"></script>
        <script src="/js/chartjs.js"></script>
        <script src="/vendors/chartjs/Chart.min.js"></script>
        <script src="/vendors/jquery.flot/jquery.flot.js"></script>
        <script src="/vendors/jquery.flot/jquery.flot.resize.js"></script>
        <script src="/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="/vendors/apexcharts/apexcharts.min.js"></script>
        <script src="/vendors/progressbar.js/progressbar.min.js"></script>
        <script src="/vendors/feather-icons/feather.min.js"></script>
        <script src="/js/template.js"></script>
        <script src="/js/dashboard.js"></script>
        <script src="/js/data-table.js"></script>
        <script src="/vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
</body>

</html>
