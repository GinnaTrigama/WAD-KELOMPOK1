@php
$csrf = csrf_token();
$result = DB::select('select * from akun where csrf = ?', [$csrf]);
@endphp
@if ($result == null) 
<script type="text/javascript">
  window.location = "{{ url('/login') }}";//here double curly bracket
</script>
@else

@extends("template/main")
@section('content')

<div class="container mt-5">
  <div class="row">
    <div class="col text-center">
      <h1>Produk</h1>
      <h3 class="text-center" style="color:cadetblue">Murah & Original</h3>
      <br><br>
    </div>
  </div
@php
$res = DB::select("select * from produk where kategori like '%pakaian%'");
$resarr = $res;
@endphp
<div class="container">
<div class="row d-flex justify-content-center">
@for ($i = 0; $i < count($resarr); $i++)

<form method="post" action="{{url("/beli")}}">
    @csrf
  <div class="card p-3 m-3" style="width: 18rem;">
  <img class="card-img-top" src="{{url($resarr[$i]->gambar)}}" alt="Card image cap">
  <div class="card-body">
  <h5 class="card-title">{{$resarr[$i]->nama_produk}}</h5>
  <p class="card-text">Rp.{{$resarr[$i]->harga}}</p>
  <input type="hidden" name="id_produk" value="{{$resarr[$i]->id}}">
  <input type="hidden" name="id_pembeli" value="{{$result[0]->id}}">
  <button type="submit" class="btn btn-primary">Beli</button>
  </div>
  </div>
</form>
@endfor
</div></div></div>
@endsection
@endif