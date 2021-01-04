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
@section("content")
@php
    $result = DB::select("select * from produk where lower(nama_produk) like ?", ["%".strtolower(app('request')->input("search"))."%"]);
@endphp

<div class="container mt-3">
    <h2 class="text-center">Hasil</h2>
    <div class="row d-flex justify-content-center">
@for ($i = 0; $i < count($result); $i++)
<div class="card p-3 m-3" style="width: 18rem;">
    <img class="card-img-top" src="{{url($result[$i]->gambar)}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$result[$i]->nama_produk}}</h5>
      <p class="card-text">Rp.{{$result[$i]->harga}}</p>
      <a href="#" class="btn btn-primary">Beli</a>
    </div>
  </div>
@endfor
</div>
</div>
@endsection