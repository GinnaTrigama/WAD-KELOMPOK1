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
<div class="container mb-5 mt-5">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Bukti</th>
            <th scope="col">Produk</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @for($i=0;$i<count($bukti_pembayaran);$i++)
        @php
        $produk = DB::select("select * from produk where id = ?",[$bukti_pembayaran[$i]->id_produk])[0];   
        $user = DB::select("select * from akun where id = ?", [$bukti_pembayaran[$i]->id_akun])[0];
        @endphp
          <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$user->nama}}</td>
            <td>
                <img src="{{url($bukti_pembayaran[$i]->gambar)}}" width="200px" height="auto">
            </td>
            <td>{{$produk->nama_produk}}</td>
            <td>
                <button class="btn btn-success">Terima</button>
                <button class="btn btn-danger">Tolak</button>
            </td>
          </tr>
        @endfor
        </tbody>
      </table>
</div>
@endsection