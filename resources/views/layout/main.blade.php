<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('UI_spps/assets/logoSekolah.png')}}">
    <link rel="stylesheet" href="{{asset('UI_spps/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('UI_spps/css/style.css')}}">
    <title>SPPS Pelita Hati</title>
</head>

<body id="body">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <div class="user_content">
            <div class="user gap-3 ps-2">
                <i class="bi bi-person-circle fs-2"></i>
                <span class="user_name">Admin</span>
            </div>
            <i class="bi bi-list" id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="index.html">
                    <i class="bi bi-grid"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-whatsapp"></i>
                    <span class="links_name">Whatsapp</span>
                </a>
                <span class="tooltip">Whatsapp</span>
            </li>

            <!-- tagihan dropdown (awal)-->
            <li>
                <a href="semua_tag.html">
                    <i class="bi bi-cash-stack"></i>
                    <span class="links_name">Tagihan</span>
                </a>
                <span class="tooltip">Tagihan</span>
                <div id="tag-items" class="dropdown-con">
                    <ul>
                        <li>
                            <a href="tambah_tag.html">
                                <i class="bi bi-receipt"></i>
                                <span class="links_name">Tambah Tagihan</span>
                            </a>
                            <span class="tooltip">Tambah Tagihan</span>
                        </li>
                        <li>
                            <a href="semua_tag.html">
                                <i class="bi bi-cash-stack"></i>
                                <span class="links_name">Semua Tagihan</span>
                            </a>
                            <span class="tooltip">Semua Tagihan</span>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- tagihan dropdown (akhir)-->

            <li>
                <a href="#">
                    <i class="bi bi-cash-coin"></i>
                    <span class="links_name">Pemasukan</span>
                </a>
                <span class="tooltip">Pemasukan</span>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-wallet"></i>
                    <span class="links_name">Pengeluaran</span>
                </a>
                <span class="tooltip">Pengeluaran</span>
            </li>
            <li>
                <a href="masterdata.html">
                    <i class="bi bi-database"></i>
                    <span class="links_name">Master Data</span>
                </a>
                <span class="tooltip">Master Data</span>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-gear"></i>
                    <span class="links_name">Pengaturan Pengguna</span>
                </a>
                <span class="tooltip">Pengaturan</span>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-info-circle"></i>
                    <span class="links_name">Informasi</span>
                </a>
                <span class="tooltip">Informasi</span>
            </li>
        </ul>
        <div class="logout">
            <a href="login.html">
                <div class="logoutbtn">
                    <div class="logout_details">Log-Out</div>
                    <i class="bi bi-box-arrow-left" id="log_out"></i>
                </div>
            </a>
        </div>
    </div>
    <!-- End Sidebar -->

    <!-- Start Content -->
    <div class="home_content">
        <!-- Start Navbar -->
        <nav class="navbar rounded-start-4">
            <div class="navbar-brand fs-3 fw-bold gap-3 ps-3 text-white">
                <img src="{{asset('UI_spps/assets/logoSekolah.png')}}" alt="" width="50px" />
                <a href="#" class="text-white text-decoration-none">SD Pelita Hati</a>
            </div>
            <div class="nav-navbar d-flex align-self-stretch align-items-center gap-5 me-4 fw-bold text-white">
                <div class="notif d-flex flex-row mx-3">
                    <a href="#" class="text-white"><i class="bi bi-whatsapp"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-bell-fill"></i></a>
                </div>
                <div class="jam d-flex flex-row gap-3">
                    <i class="bi" id="logoJam"></i>
                    <div class="d-inline-block" id="jam"></div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Start Dashboard -->
       @yield('content')
        <!-- End Dashboard -->
    </div>
    <!-- End Content -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{asset('UI_spps/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('UI_spps/js/script.js')}}"></script>
    <script src="{{asset('UI_spps/js/dashboard.js')}}"></script>
</body>

</html>
