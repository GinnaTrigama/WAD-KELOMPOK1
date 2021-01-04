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
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Kategori</th>
            <th scope="col">Gambar</th>
            <th scope="col">Detail</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
              $produks = DB::select("select * from produk");
          @endphp
          @for ($i = 0; $i < count($produks); $i++)
          <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$produks[$i]->nama_produk}}</td>
            <td>Rp.{{$produks[$i]->harga}}</td>
            <td>{{$produks[$i]->kategori}}</td>
            <td><img src="{{$produks[$i]->gambar}}" width="100" height="auto"></td>
            <td>{{$produks[$i]->detail_produk}}</td>
            <td>
              <a href="{{url("/produk/edit/".$produks[$i]->id)}}" class="btn btn-primary">Edit</a>
              <a href="{{url("/produk/hapus/".$produks[$i]->id)}}" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          @endfor
        </tbody>
      </table>
    </div>
@endsection