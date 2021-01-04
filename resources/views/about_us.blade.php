@php
$csrf = csrf_token();
$result = DB::select('select * from akun where csrf = ?', [$csrf]);
@endphp
@if ($result == null) 
<script type="text/javascript">
  window.location = "{{ url('/login') }}";//here double curly bracket
</script>
@endif
<!DOCTYPE html>
<html lang="en">

@extends('template/main')
@section('content')
    
  <h1><span>Bantuan</span> </h1>

  <!-- Flex Container -->
  <div id="container">



    <div class="button" id="button-2" data-toggle="modal" data-target="#carabelanja">
      <div id="slide"></div>
      <a href="#">Cara Belanja</a>
    </div>

    <div class="button" id="button-3" data-toggle="modal" data-target="#pembayaran">
      <div id="circle"></div>
      <a href="#">Pembayaran</a>
    </div>

    <div class="button" id="button-4" data-toggle="modal" data-target="#pengiriman">
      <div id="underline"></div>
      <a href="#">Pengiriman</a>
    </div>

    <div class="button" id="button-6" data-toggle="modal" data-target="#carajual">
      <div id="spin"></div>
      <a href="#">Cara Jual</a>
    </div>

    <!-- End Container -->
  </div>
  <div class="modal fade" id="carabelanja" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Cara Belanja</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <h3>Cara Belanja</h3>
        <ol>
          <li>Pilih Produk</li>
          <li>Tekan Beli</li>
          <li>Upload Bukti Pembayaran & Metode tekan Checkout di keranjang</li>
        </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="pembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pembayaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3>Pembayaran</h3>
          <ol>
            <li>Pilih Metode Pembayaran (BCA,Mandiri,Ezpay,dll)</li>
            <li>Upload Bukti Bayar</li>
            <li>Dan tekan submit dan tunggu status diterima dari kami</li>
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="pengiriman" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Pengiriman</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3>Pengiriman</h3>
          <ol>
            <li>Pengiriman akan dilakukan setelah bukti pembayaran sudah di terima oleh kami</li>
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="carajual" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Cara Jual</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3>Cara Jual</h3>
          <ol>
            <li>Apa ya</li>
          </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection