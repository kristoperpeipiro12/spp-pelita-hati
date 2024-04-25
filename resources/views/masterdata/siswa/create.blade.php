@extends('layout.main')
@section('content')
<div id="tagBg" class="bg-tam-tag"></div>
<div id="tagPn" class="pn-tam-tag">
  <div class="close-pn-tag d-flex justify-content-end">
    <button id="tagClose" class="btn">
      <i class="bi bi-x-lg"></i>
    </button>
  </div>
  <div class="header-pn-tag">
    <span>Tambah Data</span>
    <div class="dropdown-center">
      <button
        class="btn btn-secondary dropdown-toggle"
        type="button"
        data-bs-toggle="dropdown"
        aria-expanded="false"
        id="pn-item-select"
      >
        Per-Murid
      </button>
      <ul class="dropdown-menu">
        <li id="tam-tag-murid">
          <a class="dropdown-item text-center" href="#">Per-Murid</a>
        </li> 
        <li id="tam-tag-kelas">
          <a class="dropdown-item text-center" href="#">Per-Kelas</a>
        </li>
        <li id="tam-tag-ta">
          <a class="dropdown-item text-center" href="#">Per-Tahun Ajar</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- Form tambah data siswa -->
  <form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <div class="main-pn-tag">
      <div id="siswa">
        <div class="input-text">
          <span>Nomor Induk Siswa</span>
          <input type="text" name="nis" placeholder="" />
        </div>
        <div class="input-text">
          <span>Nama Siswa</span>
          <input type="text" name="nama" placeholder="" />
        </div>
        <div class="input-text">
          <span>Alamat</span>
          <input type="text" name="alamat" placeholder="" />
        </div>
        <div class="input-text">
          <span>Tempat Lahir</span>
          <input type="text" name="tempatlahir" placeholder="" />
        </div>
        <div class="input-text">
          <span>Tanggal Lahir</span>
          <input type="date" name="tanggallahir" placeholder="" />
        </div>
      </div>
      
        <div class="input-text">
          <span>Jenis Kelamin</span>
          <input type="text" name="jeniskelamin" placeholder="" />
        </div>
        <div class="input-text">
          <span>Kelas</span>
          <input type="text" name="kelas" placeholder="" />
        </div>
        <div class="input-text">
          <span>No HandPhone</span>
          <input type="number" name="nohp" placeholder="" />
        </div>
      <div
        class="btn-input-tag d-flex justify-content-end gap-4 mt-3 mb-2"
      >
        <button type="submit" class="btn btn-success">Tambah</button>
        {{-- <button type="button" class="btn btn-danger">Hapus</button> --}}
      </div>
    </div>
  </form>
  <!-- End Form tambah tagihan -->
</div>
@endsection