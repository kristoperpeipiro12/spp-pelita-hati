@extends('layout.main')
@section('content')
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
            <!-- Mengubah tombol "Tambah" menjadi tautan -->
            <a href="{{ route('siswa.create') }}" class="btn btn-tam-tag btn-success">
              <i class="bi bi-plus"></i>
            </a>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama Siswa/i</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Kelas</th>
                <th scope="col">No HP</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($siswa as $index => $item)
            <tr class="{{ $index % 2 == 0 ? 'bg-danger' : '' }}">
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $item->nis }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->tempatlahir }}</td>
                <td>{{ $item->tanggallahir }}</td>
                <td>{{ $item->jeniskelamin }}</td>
                <td>{{ $item->kelas }}</td>
                <td>{{ $item->nohp }}</td>

                <td class="">
                    <a href="{{ route('siswa.edit', $item->nis) }}" class="btn btn-warning text-white me-2" style="width: 80px">
                        Edit
                    </a>
                    <form action="{{ route('siswa.destroy', $item->nis) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-white mx-2" style="width: 80px">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection
