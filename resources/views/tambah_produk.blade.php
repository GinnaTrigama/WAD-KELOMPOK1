@php
$csrf = csrf_token();
$result = DB::select('select * from akun where csrf = ?', [$csrf]);
@endphp
@if ($result == null) 
<script type="text/javascript">
  window.location = "{{ url('/login') }}";//here double curly bracket
</script>
@endif

@extends('template/main')
@section('content')
    <div class="container mt-5 mb-5">
        <form method="post" action="{{url("/produk/tambah")}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Produk</label>
              <input name="nama_produk" class="form-control" id="exampleInputEmail1" placeholder="Nama Produk">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Harga</label>
              <input name="harga" class="form-control" id="exampleInputEmail1" placeholder="Harga">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kategori</label>
              <input name="kategori" class="form-control" id="exampleInputEmail1" placeholder="Kategori">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Detail Produk</label>
              <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Gambar</label>
                <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection