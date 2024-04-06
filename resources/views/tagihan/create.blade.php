@extends('layout.main')
@section('content')

<div class="main-pn-tag">
  <div id="siswa">
    <div class="input-text">
      <span>Nomor Induk Siswa</span>
      <input type="text" placeholder="61xxxxxxxxxxx" name="nis" />
    </div>
    <div class="input-text">
      <span>Nama Siswa</span>
      <input type="text" placeholder="Jamilah" name="nama" />
    </div>
    <div class="input-text">
      <span>Kelas</span>
      <input type="text" placeholder="1-A" name="kelas" />
    </div>
    <div class="input-text">
      <span>Keterangan Tagihan</span>
      <input type="text" placeholder="Pembayaran SPP" name="keterangan" />
    </div>
    <div class="input-text">
      <span>Nominal Tagihan</span>
      <input type="number" placeholder="Rp. xxx.xxx" name="tagihan" />
    </div>
  </div>
  <div id="kelas" class="d-none">
    <div class="input-text">
      <span>Kelas</span>
      <input type="text" placeholder="61xxxxxxxxxxx" name="kelas" />
    </div>
    <div class="input-text">
      <span>Keterangan Tagihan</span>
      <input type="text" placeholder="Pembayaran SPP" name="keterangan" />
    </div>
    <div class="input-text">
      <span>Nominal Tagihan</span>
      <input type="number" placeholder="Rp. xxx.xxx" name="tagihan" />
    </div>
  </div>
  {{-- <div id="tahun-ajar" class="d-none">
    <div class="input-text">
      <span>Tahun Ajar</span>
      <input type="text" placeholder="61xxxxxxxxxxx" name="tahun_ajar" />
    </div>
    <div class="input-text">
      <span>Keterangan Tagihan</span>
      <input type="text" placeholder="Pembayaran SPP" name="keterangan_tagihan" />
    </div>
    <div class="input-text">
      <span>Nominal Tagihan</span>
      <input type="number" placeholder="Rp. xxx.xxx" name="nominal_tagihan" />
    </div>
  </div> --}}
  <div class="btn-input-tag d-flex justify-content-end gap-4 mt-3 mb-2">
    <button class="btn btn-success">Tambah</button>
    <button class="btn btn-danger">Hapus</button>
  </div>
</div>

@endsection
