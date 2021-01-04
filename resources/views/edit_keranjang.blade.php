@php
$csrf = csrf_token();
$result = DB::select('select * from akun where csrf = ?', [$csrf]);
@endphp
@if ($result == null) 
<script type="text/javascript">
  window.location = "{{ url('/login') }}";//here double curly bracket
</script>
@endif

@extends("template/main")
@section('content')
<div class="container mt-5 mb-5">
    <form method="post" action="{{url("/edit/keranjang")}}">
        @csrf
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
          <div class="col-sm-10">
            <input class="form-control" id="inputEmail3" placeholder="Nama Produk" value="{{$namaproduk}}" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah</label>
          <div class="col-sm-10">
            <input class="form-control" name="jumlah" id="inputPassword3" placeholder="Jumlah" value="{{$jumlah}}">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
              <input type="hidden" name="id_keranjang" value="{{$id_keranjang}}">
            <button type="submit" class="btn btn-primary">Ubah</button>
            <a href="{{url("/keranjang")}}" class="btn btn-warning">Cancel</a>
          </div>
        </div>
    </form>
</div>
@endsection