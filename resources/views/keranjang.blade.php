@php
$csrf = csrf_token();
$result = DB::select('select * from akun where csrf = ?', [$csrf]);
@endphp
@if ($result == null) 
<script type="text/javascript">
  window.location = "{{ url('/login') }}";//here double curly bracket
</script>
@else
@php
    $keranjang = DB::select("select * from keranjang where id_pembeli = ?", [$result[0]->id])
@endphp
@extends("template/main")
@section('content')

  <div class="container mt-5 mb-5">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Harga</th>
          <th scope="col">Total Harga</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
        $total = 0;
        @endphp
        @for ($i = 0; $i < count($keranjang); $i++)
        @php
            $prod = DB::select('select * from produk where id = ?', [$keranjang[$i]->id_produk]);
            $total += $prod[0]->harga*$keranjang[$i]->jumlah;
        @endphp
        <tr>
          <th scope="row">{{$i}}</th>
          <td>{{$prod[0]->nama_produk}}</td>
          <td>{{$keranjang[$i]->jumlah}}</td>
          <td>Rp.{{$prod[0]->harga}}</td>
          <td>Rp.{{$prod[0]->harga*$keranjang[$i]->jumlah}}</td>
          <td>
            <a href="{{url("/edit_keranjang/".$keranjang[$i]->id)}}"class="btn btn-success">Edit</a>
            <a href="{{url("/hapus_keranjang/".$keranjang[$i]->id)}}" class="btn btn-danger">Hapus</a>
            <a href="{{url("/checkout/".$keranjang[$i]->id)}}" class="btn btn-danger">Checkout</a>
          </td>
        </tr>
        @endfor
        <tr>
          <th scope="row">Total</th>
          <td></td>
          <td></td>
          <td></td>
          <td>Rp.{{$total}}</td>
          <td>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

@endsection
@endif