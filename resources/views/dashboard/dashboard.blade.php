@extends('layout.main')

@section('content')
<div class="home_content">
    <!-- Start Navbar -->
    <nav class="navbar rounded-start-4">
      <div class="navbar-brand fs-3 fw-bold gap-3 ps-3 text-white">
        <img src="{{ asset('UI_spps/assets/logoSekolah.png') }}" alt="" width="50px" />
        <a href="#" class="text-white text-decoration-none">SD Pelita Hati</a>
      </div>
      <div
        class="nav-navbar d-flex align-self-stretch align-items-center gap-5 me-4 fw-bold text-white"
      >
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

<div class="main-content">
    <div class="header">
        <span class="d-block w-100 fs-2 pb-3 fw-bold">Dashboard</span>
        <div class="cards">
            <div class="kartu">
                <div class="card-logo rounded-circle">
                    <i class="bi bi-bank"></i>
                </div>
                <div class="card-name">
                    Pemasukan
                    <div class="price">Rp. xxx.xx<span> / hari</span></div>
                </div>
            </div>
            <div class="kartu">
                <div class="card-logo rounded-circle">
                    <i class="bi bi-coin"></i>
                </div>
                <div class="card-name">
                    Pengeluaran
                    <div class="price">Rp. xxx.xx<span> / hari</span></div>
                </div>
            </div>
            <div class="kartu">
                <div class="card-logo rounded-circle">
                    <i class="bi bi-people"></i>
                </div>
                <div class="card-name">
                    Siswa Aktif
                    <div class="price">xxx.xx</div>
                </div>
            </div>
        </div>
    </div>
    <div class="chart-container">
        <div class="chart">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>
</div>
@endsection
