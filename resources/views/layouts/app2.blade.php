<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Website Black Gold Cherish' }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/jpg" href="/css/src/assets/images/logos/BGClogo.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="/css/src/assets/css/styles.min.css" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .card {
            background-color: azure;
        }
    </style>
</head>

<body>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="/" class="text-nowrap logo-img">
                        <img src="/css/src/assets/images/logos/BGClogo.jpg" width="500" alt="Logo" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Menu Utama</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('home') }}" aria-expanded="false">
                                <i class="ti ti-home"></i>
                                <span class="hide-menu">Beranda</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('produk.index') }}" aria-expanded="false">
                                <i class="ti ti-table"></i>
                                <span class="hide-menu">Produk</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('pesanan.index') }}" aria-expanded="false">
                                <i class="ti ti-list-check"></i>
                                <span class="hide-menu">Pesanan</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- Sidebar End -->

        <!-- Main Wrapper -->
        <div class="body-wrapper">
            <!-- Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center">
                            <li class="nav-item dropdown">
                                <!-- Trigger Dropdown -->
                                <a class="nav-link nav-icon-hover" href="#" id="drop2" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/css/src/assets/images/profile/profile.png" alt="User" width="45"
                                        class="rounded-circle">
                                </a>

                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                    <li>
                                        <a href="#" class="dropdown-item"><i class="ti ti-user"></i> Profil</a>
                                    </li>
                                    <li>
                                        <!-- Register Button -->
                                        <a href="{{ route('register') }}" class="dropdown-item">
                                            <i class="ti ti-mail"></i> Akun
                                        </a>
                                    </li>
                                    <li>
                                        <!-- Logout Button -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button wire:click="logout" class="dropdown-item text-danger">
                                                <i class="ti ti-logout"></i> Keluar
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Header End -->

            <!-- Content Start -->
            <div class="container-fluid mt-4">
                @yield('content')
            </div>
            <!-- Content End -->

            <!-- Footer -->
            <footer class="bg-dark text-white text-center py-3">
                <p>&copy; 2024 Black Gold Cherish. All Rights Reserved.</p>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <!-- Bootstrap JS Bundle (termasuk Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="/css/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/css/src/assets/libs/simplebar/dist/simplebar.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
</body>

</html>
