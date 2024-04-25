@extends('layout.main')
@section('content')
    <div class="home_content">
        <!-- Start Navbar -->
        <nav class="navbar rounded-start-4">
            <div class="navbar-brand fs-3 fw-bold gap-3 ps-3 text-white">
                <img src="{{ asset('UI_spps/assets/logoSekolah.png') }}" alt="" width="50px" />
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

        <!-- Start Data Siswa -->
        <div class="main-content">
            <div class="header h-auto">
                <span class="d-block w-100 fs-2 pb-3 fw-bold">Data Siswa</span>
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
                            <th scope="col">Alamat</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nis }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->tempatlahir }}</td>
                                <td>{{ $item->tanggallahir }}</td>
                                <td>{{ $item->jeniskelamin }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->nohp }}</td>
                                <td>{{ $item->foto }}</td>
                                <td>
                                    <a href="{{ route('siswa.edit', ['nis' => $item->nis]) }}" class="btn btn-primary">
                                        <i class="fas fa-pen"></i> Edit
                                    </a>
                                  <!-- Tombol Hapus -->
                                  <button onclick="document.getElementById('modal-hapus-{{ $item->nis }}').style.display='block'">Hapus</button>
                                  
                                  <!-- Modal Hapus -->
                                  <div id="modal-hapus-{{ $item->nis }}" class="modal">
                                      <div class="modal-content">
                                          <span onclick="document.getElementById('modal-hapus-{{ $item->nis }}').style.display='none'" class="close" title="Close Modal">&times;</span>
                                          <form action="{{ route('siswa.delete', ['nis' => $item->nis]) }}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                              <div class="container">
                                                  <h1>Delete Data</h1>
                                                  <p>Are you sure you want to delete this data?</p>
                                                  <div class="clearfix">
                                                      <button type="button" onclick="document.getElementById('modal-hapus-{{ $item->nis }}').style.display='none'" class="cancelbtn">Cancel</button>
                                                      <button type="submit" class="deletebtn">Delete</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                                    {{-- <a data-toggle="modal" data-target="#modal-hapus{{ $item->nis }}" class="btn btn-danger">
                                  <i class="fas fa-trash-alt"></i> Hapus
                              </a> --}}
                                </td>
                            </tr>
                            {{-- <div class="modal fade" id="modal-hapus-{{ $item->nis }}">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h4 class="modal-title">Konfirmasi Hapus data</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <p>Apakah anda yakin ingin hapus data <b>{{ $item->nama }}</b>?</p>
                                  </div>
                                  <div class="modal-footer justify-content-between">
                                      <form action="{{ route('siswa.delete', ['nis' => $item->nis]) }}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button type="button" class="btn btn-default mr-auto" data-dismiss="modal">Tidak</button>
                                          <button type="submit" class="btn btn-primary ml-auto">Ya, Hapus</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div> --}}
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Data Siswa -->
        <div id="tagBg" class="bg-tam-tag"></div>
        <div id="tagPn" class="pn-tam-tag">
            <div class="close-pn-tag d-flex justify-content-end">
                <button id="tagClose" class="btn">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <div class="header-pn-tag">
                <span>Tambah Data</span>
            </div>
            <!-- Form tambah data siswa -->
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                <div class="main-pn-tag">
                    <div id="siswa">
                        <div class="input-text">
                            <span>Nomor Induk Siswa</span>
                            <input type="number" name="nis" placeholder="" />
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
                        <select name="jeniskelamin" id="jeniskelamin">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="input-text">
                        <span>Kelas</span>
                        <input type="text" name="kelas" placeholder="" />
                    </div>
                    <div class="input-text">
                        <span>No HandPhone</span>
                        <input type="text" name="nohp" placeholder="" maxlength="13"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    </div>
                    <div class="btn-input-tag d-flex justify-content-end gap-4 mt-3 mb-2">
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </form>
            <!-- End Form tambah tagihan -->
        </div>
    </div>
@endsection
