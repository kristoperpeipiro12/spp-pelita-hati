@extends('layout.main')
@section('content')
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
                <th scope="col">Keterangan</th>
                <th scope="col">Tunggakan</th>
                <th scope="col">Jatuh Tempo</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-danger">
                <th scope="row">1</th>
                <td>61234567891</td>
                <td>Asep</td>
                <td>SPP Januari</td>
                <td>Rp. 190.000</td>
                <td>15/10/2024</td>
                <td class="">
                  <button
                    type="button"
                    class="btn btn-warning text-white me-2"
                    style="width: 80px"
                  >
                    Edit
                  </button>
                  <button
                    type="button"
                    class="btn btn-danger text-white mx-2"
                    style="width: 80px"
                  >
                    Hapus
                  </button>
                </td>
              </tr>
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
                    <a class="dropdown-item text-center" href="#"
                      >Per-Tahun Ajar</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="main-pn-tag">
              <div id="siswa">
                <div class="input-text">
                  <span>Nomor Induk Siswa</span>
                  <input type="text" placeholder="61xxxxxxxxxxx" />
                </div>
                <div class="input-text">
                  <span>Nama Siswa</span>
                  <input type="text" placeholder="Jamilah" />
                </div>
                <div class="input-text">
                  <span>Kelas</span>
                  <input type="text" placeholder="1-A" />
                </div>
                <div class="input-text">
                  <span>Keterangan Tagihan</span>
                  <input type="text" placeholder="Pembayaran SPP" />
                </div>
                <div class="input-text">
                  <span>Nominal Tagihan</span>
                  <input type="number" placeholder="Rp. xxx.xxx" />
                </div>
              </div>
              <div id="kelas" class="d-none">
                <div class="input-text">
                  <span>Kelas</span>
                  <input type="text" placeholder="61xxxxxxxxxxx" />
                </div>
                <div class="input-text">
                  <span>Keterangan Tagihan</span>
                  <input type="text" placeholder="Pembayaran SPP" />
                </div>
                <div class="input-text">
                  <span>Nominal Tagihan</span>
                  <input type="number" placeholder="Rp. xxx.xxx" />
                </div>
              </div>
              <div id="tahun-ajar" class="d-none">
                <div class="input-text">
                  <span>Tahun Ajar</span>
                  <input type="text" placeholder="61xxxxxxxxxxx" />
                </div>
                <div class="input-text">
                  <span>Keterangan Tagihan</span>
                  <input type="text" placeholder="Pembayaran SPP" />
                </div>
                <div class="input-text">
                  <span>Nominal Tagihan</span>
                  <input type="number" placeholder="Rp. xxx.xxx" />
                </div>
              </div>
              <div
                class="btn-input-tag d-flex justify-content-end gap-4 mt-3 mb-2"
              >
                <button class="btn btn-success">Tambah</button>
                <button class="btn btn-danger">Hapus</button>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection