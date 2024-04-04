@extends('layout.main')

@section('content')
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
@endsection
