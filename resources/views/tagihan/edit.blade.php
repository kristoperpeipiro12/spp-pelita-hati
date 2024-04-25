@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form edit tagihan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('tagihan.update', ['idtagihan' => $tagihan->idtagihan]) }}" method="POST">
                @csrf
                {{-- @method('PUT') --}}
                {{-- @method('PUT') <!-- Menambahkan metode PUT untuk mengubah data --> --}}
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit data</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NIS</label>
                                    <input type="text" name="nis" class="form-control" id="nis"
                                        value="{{ $tagihan->nis }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="{{ $tagihan->nama }}">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">kelas</label>
                                  <input type="text" class="form-control" id="kelas" name="kelas"
                                      value="{{ $tagihan->kelas }}">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan"
                                    value="{{ $tagihan->keterangan }}">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Tunggakan</label>
                              <input type="number" class="form-control" id="tagihan" name="tagihan"
                                  value="{{ $tagihan->tagihan }}">
                          </div>
                         
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jatuh tempo</label>
                        <input type="date" class="form-control" id="jatuhtempo" name="jatuhtempo"
                            value="{{ $tagihan->jatuhtempo }}">
                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
