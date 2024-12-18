<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="/css/src/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="/css/src/assets/css/styles.min.css" />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .card {
            background-color: azure;
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="/css/src/assets/images/logos/dark-logo.svg" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <!-- Menu Utama -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Menu Utama</span>
                        </li>

                        <!-- Beranda -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('/') ? 'active' : '' }}" href="/" aria-expanded="false">
                                <span>
                                    <i class="ti ti-home"></i>
                                </span>
                                <span class="hide-menu">Beranda</span>
                            </a>
                        </li>

                        <!-- Data Pasien -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('pasien') ? 'active' : '' }}" href="/pasien" aria-expanded="false">
                                <span>
                                    <i class="ti ti-users"></i>
                                </span>
                                <span class="hide-menu">Data Pasien</span>
                            </a>
                        </li>

                        <!-- Tambah Pasien -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('pasien/create') ? 'active' : '' }}" href="/pasien/create" aria-expanded="false">
                                <span>
                                    <i class="ti ti-plus"></i>
                                </span>
                                <span class="hide-menu">Tambah Pasien</span>
                            </a>
                        </li>

                        <!-- Data Poli -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('poli') ? 'active' : '' }}" href="/poli" aria-expanded="false">
                                <span>
                                    <i class="ti ti-table"></i>
                                </span>
                                <span class="hide-menu">Data Poli</span>
                            </a>
                        </li>

                        <!-- Tambah Poli -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('poli/create') ? 'active' : '' }}" href="/poli/create" aria-expanded="false">
                                <span>
                                    <i class="ti ti-plus"></i>
                                </span>
                                <span class="hide-menu">Tambah Poli</span>
                            </a>
                        </li>

                        <!-- Data Pendaftaran -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('daftar') ? 'active' : '' }}" href="/daftar" aria-expanded="false">
                                <span>
                                    <i class="ti ti-table"></i>
                                </span>
                                <span class="hide-menu">Data Pendaftaran</span>
                            </a>
                        </li>

                        <!-- Laporan Data Pasien -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('laporan-pasien') ? 'active' : '' }}"
                                href="/laporan-pasien/create" aria-expanded="false">
                                <span>
                                    <i class="ti ti-table"></i>
                                </span>
                                <span class="hide-menu">Laporan Data Pasien</span>
                            </a>
                        </li>

                        <!-- Laporan Data Pendfataran -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('laporan-daftar') ? 'active' : '' }}"
                                href="/laporan-daftar/create" aria-expanded="false">
                                <span>
                                    <i class="ti ti-table"></i>
                                </span>
                                <span class="hide-menu">Laporan Data Pendaftaran</span>
                            </a>
                        </li>

                        <!-- Tambah Pendaftaran -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('daftar/create') ? 'active' : '' }}" href="/daftar/create" aria-expanded="false">
                                <span>
                                    <i class="ti ti-plus"></i>
                                </span>
                                <span class="hide-menu">Tambah pendaftaran</span>
                            </a>
                        </li>

                        <!-- Auth -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">AUTH</span>
                        </li>

                        <!-- Login -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('login') ? 'active' : '' }}" href="/login" aria-expanded="false">
                                <span>
                                    <i class="ti ti-login"></i>
                                </span>
                                <span class="hide-menu">Login</span>
                            </a>
                        </li>

                        <!-- Register -->
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('register') ? 'active' : '' }}" href="/register" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user-plus"></i>
                                </span>
                                <span class="hide-menu">Register</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/css/src/assets/images/profile/user-1.jpg" alt=""
                                        width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">Profil</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">Akun</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">Tugas</p>
                                        </a>

                                        <a id="logout-form" href="/login"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Keluar</a>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                @include('flash::message')
                @yield('content')
            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script src="/css/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="/css/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/css/src/assets/sidebarmenu.js"></script>
    <script src="/css/src/assets/js/app.min.js"></script>
    <script src="/css/src/assets/libs/simplebar/dist/simplebar.js"></script>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

</body>

</html>
