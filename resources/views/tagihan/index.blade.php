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
  <!-- End Navbar -->

  <!-- Start Semua Tagihan -->
  <div class="main-content">
    <div class="header h-auto">
      <span class="d-block w-100 fs-2 pb-3 fw-bold">Semua Tagihan</span>
    </div>
    <div class="sem-tag">
      <div class="cari fw-bolder">
        <i class="bi bi-search"></i>
        <span class="">Search :</span>
      </div>
      <div class="form-tamtag mb-3">
        <div class="input-box">
          <span>NIS</span>
          <input type="text" placeholder="xxxxxxxxx" />
        </div>
        <div class="input-box">
          <span>Nama Siswa</span>
          <input type="text" placeholder="xxxxxxxxx" />
        </div>
        <div class="input-box">
          <span>Tahun Angkatan</span>
          <input type="date" placeholder="xxxxxxxxx" />
        </div>
      </div>
      <div class="con-tambah">
        <button id="tagOpen" class="btn btn-tam-tag btn-success">
          <i class="bi bi-plus"></i>
        </button>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama Siswa/i</th>
            <th scope="col">Kelas</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Tunggakan</th>
            <th scope="col">Jatuh Tempo</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tagihan as $item)
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->siswa ? ($item->siswa->nis ? $item->siswa->nis : '-') : '-' }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->kelas }}</td>
              <td>{{ $item->keterangan }}</td>
              <td>{{ $item->tunggakan }}</td>
              <td>{{ $item->jatuhtempo }}</td>
              <td>
                  <a href="{{ route('tagihan.edit',['idtagihan' => $item->idtagihan]) }}" class="btn btn-warning text-white me-2" style="width: 80px">Edit</a>
                  <button onclick="document.getElementById('modal-hapus-{{ $item->idtagihan }}').style.display='block'">Hapus</button>
                                        
                  <!-- Modal Hapus -->
                  <div id="modal-hapus-{{ $item->idtagihan }}" class="modal">
                      <div class="modal-content">
                          <span onclick="document.getElementById('modal-hapus-{{ $item->idtagihan }}').style.display='none'" class="close" title="Close Modal">&times;</span>
                          <form action="{{ route('tagihan.delete', ['idtagihan' => $item->idtagihan]) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <div class="container">
                                  <h1>Delete Data</h1>
                                  <p>Are you sure you want to delete this data?</p>
                                  <div class="clearfix">
                                      <button type="button" onclick="document.getElementById('modal-hapus-{{ $item->idtagihan }}').style.display='none'" class="cancelbtn">Cancel</button>
                                      <button type="submit" class="deletebtn">Delete</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </td>
          </tr>
      @endforeach
      
      
          <!-- Isi tabel tagihan akan ditampilkan di sini -->
        </tbody>
      </table>
  
      <div id="tagBg" class="bg-tam-tag"></div>
      <div id="tagPn" class="pn-tam-tag">
        <div class="close-pn-tag d-flex justify-content-end">
          <button id="tagClose" class="btn">
            <i class="bi bi-x-lg"></i>
          </button>
        </div>
        <div class="header-pn-tag">
          <span>Tambah Tagihan</span>
          <div class="dropdown-center">
            <button
              class="btn btn-secondary dropdown-toggle"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              id="pn-item-select"
            >
           
          </div>
        </div>
        <!-- Form tambah tagihan -->
        <form action="{{ route('tagihan.store') }}" method="POST">
          @csrf
          <div class="main-pn-tag">
            <div id="siswa">
              {{-- <div class="input-text">
                <span>Id Tagihan</span>
                <input type="text" name="idtagihan" placeholder="" />
              </div> --}}
              <div class="input-text">
                <span>Nomor Induk Siswa</span>
                <input type="text" name="nis" placeholder="" />
              </div>
              <div class="input-text">
                <span>Nama Siswa</span>
                <input type="text" name="nama" placeholder="Jamilah" />
              </div>
              <div class="input-text">
                <span>Kelas</span>
                <input type="text" name="kelas" placeholder="1-A" />
              </div>
              <div class="input-text">
                <span>Keterangan Tagihan</span>
                <input type="text" name="keterangan" placeholder="Pembayaran SPP" />
              </div>
              <div class="input-text">
                <span>Nominal Tagihan</span>
                <input type="number" name="tunggakan" placeholder="Rp. xxx.xxx" />
              </div>
              <div class="input-text">
                <span>Jatuh Tempo</span>
                <input type="date" name="jatuhtempo" placeholder="" />
              </div>
            </div>
            <div
              class="btn-input-tag d-flex justify-content-end gap-4 mt-3 mb-2"
            >
              <button type="submit" class="btn btn-success">Tambah</button>
              <button type="button" class="btn btn-danger">Hapus</button>
            </div>
          </div>
        </form>
        <!-- End Form tambah tagihan -->
      </div>
    </div>
  </div>
  <!-- End Semua Tagihan -->
</div>
@endsection
