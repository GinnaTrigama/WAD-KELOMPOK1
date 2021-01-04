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
    <form method="post" action="{{url("/kirim_bukti_pembayaran")}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="exampleFormControlSelect1">Pilih Metode Pembayaran</label>
        <select name="metode" class="form-control" id="exampleFormControlSelect1">
            <option value="bank_mandiri"selected>Bank Mandiri</option>
            <option value="bank_bni">Bank BNI</option>
            <option value="bank_bjb">Bank BJB</option>
            <option value="bank_bca">Bank BCA</option>
            <option value="ezpay">Ezpay</option>
        </select>
        </div>
        <div class="form-group">
        <label for="exampleFormControlFile1">Bukti Pembayaran</label>
        <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <input type="hidden" name="id_produk" value="{{$produk->id}}">
        <input type="hidden" name="id_akun" value="{{$result[0]->id}}">
        <input type="hidden" name="total_pembayaran" value="{{$produk->harga*$keranj->jumlah}}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection