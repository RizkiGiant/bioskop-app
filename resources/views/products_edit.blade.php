@extends('admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Products Page</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  
      <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
        <a href="{{ route ('products.index') }}" class="btn btn-default">Kembali</a>
        <br><br>
          <form action="{{ route ('products.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label>Gambar</label>
              <input type="file" name="image" class="form-control-file" accept="image" placeholder="..." value="{{ $data->image }}" readonly>
              @error('image')
                  <p>{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
                <label>Nama Film</label>
                <input type="text" name="nama_produk" class="form-control" placeholder="..."value="{{ $data->nama_produk }}">
                @error('nama_produk')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label>Durasi</label>
                <input type="time" name="durasi" class="form-control" placeholder="..."value="{{ $data->durasi }}">
                @error('durasi')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label>Harga Produk</label>
                <input type="number" name="harga_produk" class="form-control" placeholder="..." value="{{ $data->harga_produk }}">
                @error('harga_produk')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Simpan">
          </form>
        </div>
      </div>
      <!-- /.card -->

    </section>
      <!-- /.content -->
@endsection