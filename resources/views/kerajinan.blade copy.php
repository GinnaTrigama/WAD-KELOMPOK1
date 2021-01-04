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

  <div class="container mt-5">
    <div class="row">
      <div class="col text-center">
        <h1>Kerajinan Tas</h1>
        <h3 class="text-center" style="color:cadetblue">Kerajinan Tangan</h3>
        <br><br>
      </div>
    </div>
    <!-- jika ingin membuat card dibaris dua, copy row sampai div kedua terakhir -->
    <div class="row">
      <!-- col-md utk mengepaskan ukuran jika dibuka di handphone. md medium lg large sm small-->
      <div class="col-md">
        <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
        <div class="card"">
                <img src=" foto/kerajinan 1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Keranjang Eceng Gondog</h5>
            <p class="card-text">Rp. 95.000</p>
            <a href="#" class="btn btn-warning">Beli</a>
          </div>
        </div>

      </div>

      <div class="col-md">
        <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
        <div class="card">
          <img src="foto/kerajinan 2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tas Anyaman Wanita</h5>
            <p class="card-text">Rp. 110.000</p>
            <a href="#" class="btn btn-warning">Beli</a>
          </div>
        </div>

      </div>



      <div class="col-md">
        <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
        <div class="card"">
                <img src=" foto/kerajinan 3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tas Putih Tulang Mutiara</h5>
            <p class="card-text">Rp. 100.000</p>
            <a href="#" class="btn btn-warning">Beli</a>
          </div>
        </div>

      </div>
      <div class="col-md">
        <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
        <div class="card"">
                <img src=" foto/kerajinan 14.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tas & Pouch motif burung</h5>
            <p class="card-text">Rp. 120.000</p>
            <a href="#" class="btn btn-warning">Beli</a>
          </div>
        </div>

      </div>

      <div class="col-md">
        <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
        <div class="card"">
                <img src=" foto/kerajinan 12.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tas Anyaman Batok</h5>
            <p class="card-text">Rp. 100.000</p>
            <a href="#" class="btn btn-warning">Beli</a>
          </div>
        </div>

      </div>

      <div class="container mt-5">
        <div class="row">
          <div class="col text-center">
            <h1>Produk Kerajinan Tangan</h1>
            <h3 class="text-center" style="color:cadetblue">Terbaru & Best Seller</h3>
            <br><br>
          </div>
        </div>
        <!-- jika ingin membuat card dibaris dua, copy row sampai div kedua terakhir -->
        <div class="row">
          <!-- col-md utk mengepaskan ukuran jika dibuka di handphone. md medium lg large sm small-->
          <div class="col-md">
            <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
            <div class="card"">
                <img src=" foto/kerajinan 15.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Akar Wangi Gajah</h5>
                <p class="card-text">Rp. 55.000</p>
                <a href="#" class="btn btn-warning">Beli</a>
              </div>
            </div>

          </div>

          <div class="col-md">
            <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
            <div class="card">
              <img src="foto/kerajinan 7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Miniatur Delman </h5>
                <p class="card-text">Rp. 25.000</p>
                <a href="#" class="btn btn-warning">Beli</a>
              </div>
            </div>

          </div>

          <div class="col-md">
            <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
            <div class="card"">
                <img src=" foto/kerajinan 17.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Akar Wangi Kura-kura</h5>
                <p class="card-text">Rp. 85.000</p>
                <a href="#" class="btn btn-warning">Beli</a>
              </div>
            </div>

          </div>

          <div class="col-md">
            <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
            <div class="card"">
                <img src=" foto/kerajinan 9.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Miniatur Becak Kayu</h5>
                <p class="card-text">Rp. 135.000</p>
                <a href="#" class="btn btn-warning">Beli</a>
              </div>
            </div>

          </div>
          <div class="col-md">
            <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
            <div class="card">
              <img src=" foto/kerajinan 10.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Miniatur Mobil Kayu</h5>
                <p class="card-text">Rp. 130.000</p>
                <a href="#" class="btn btn-warning">Beli</a>
              </div>
            </div>

          </div>


          <div class="col-md">
            <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
            <div class="card"">
                <img src=" foto/mobilmntp.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Miniatur Mobil Tua</h5>
                <p class="card-text">Rp. 130.000</p>
                <a href="#" class="btn btn-warning">Beli</a>
              </div>
            </div>

          </div>

          <div class="container mt-5">
            <div class="row">
              <div class="col text-center">
                <h1>Produk Kerajinan Tangan Batok Kelapa</h1>
                <h3 class="text-center" style="color:cadetblue">Terbaru & Best Seller</h3>
                <br><br>
              </div>
            </div>
            <!-- jika ingin membuat card dibaris dua, copy row sampai div kedua terakhir -->
            <div class="row">
              <!-- col-md utk mengepaskan ukuran jika dibuka di handphone. md medium lg large sm small-->
              <div class="col-md">
                <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
                <div class="card"">
                <img src=" foto/mangkok.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Mangkok Batok Kelapa</h5>
                    <p class="card-text">Rp. 35.000</p>
                    <a href="#" class="btn btn-warning">Beli</a>
                  </div>
                </div>

              </div>

              <div class="col-md">
                <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
                <div class="card">
                  <img src="foto/teko.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Teko Air Batok Kelapa </h5>
                    <p class="card-text">Rp. 25.000</p>
                    <a href="#" class="btn btn-warning">Beli</a>
                  </div>
                </div>

              </div>

              <div class="col-md">
                <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
                <div class="card"">
                <img src=" foto/cangkir.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Cangkir Batok Kelapa</h5>
                    <p class="card-text">Rp. 35.000</p>
                    <a href="#" class="btn btn-warning">Beli</a>
                  </div>
                </div>

              </div>

              <div class="col-md">
                <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
                <div class="card"">
                <img src=" foto/celengan.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Celengan Batok Kelapa</h5>
                    <p class="card-text">Rp. 35.000</p>
                    <a href="#" class="btn btn-warning">Beli</a>
                  </div>
                </div>

              </div>
              <div class="col-md">
                <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
                <div class="card">
                  <img src=" foto/gantungank.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Gantungan Kunci Batok Kelapa</h5>
                    <p class="card-text">Rp. 30.000</p>
                    <a href="#" class="btn btn-warning">Beli</a>
                  </div>
                </div>

              </div>

              <div class="col-md">
                <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
                <div class="card"">
                <img src=" foto/toples.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Toples Bunga Batok Kelapa</h5>
                    <p class="card-text">Rp. 40.000</p>
                    <a href="#" class="btn btn-warning">Beli</a>
                  </div>
                </div>

              </div>

              <div class="container mt-5">
                <div class="row">
                  <div class="col text-center">
                    <h1>Produk Kerajinan Batik Nusantara</h1>
                    <h3 class="text-center" style="color:cadetblue">Terbaru & Best Seller</h3>
                    <br><br>
                  </div>
                </div>
                <!-- jika ingin membuat card dibaris dua, copy row sampai div kedua terakhir -->
                <div class="row">
                  <!-- col-md utk mengepaskan ukuran jika dibuka di handphone. md medium lg large sm small-->
                  <div class="col-md">
                    <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
                    <div class="card"">
                <img src=" foto/blangkon.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Blangkon Batik Yogyakarta</h5>
                        <p class="card-text">Rp. 55.000</p>
                        <a href="#" class="btn btn-warning">Beli</a>
                      </div>
                    </div>

                  </div>

                  <div class="col-md">
                    <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
                    <div class="card">
                      <img src="foto/dompet.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Dompet Batik Yogyakarta </h5>
                        <p class="card-text">Rp. 75.000</p>
                        <a href="#" class="btn btn-warning">Beli</a>
                      </div>
                    </div>

                  </div>

                  <div class="col-md">
                    <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
                    <div class="card"">
                <img src=" foto/tempat.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Tempat Tisu Batik Yogyakarta</h5>
                        <p class="card-text">Rp. 35.000</p>
                        <a href="#" class="btn btn-warning">Beli</a>
                      </div>
                    </div>

                  </div>

                  <div class="col-md">
                    <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
                    <div class="card"">
                <img src=" foto/sandal.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Sandal khas Batik Yogyakarta</h5>
                        <p class="card-text">Rp. 35.000</p>
                        <a href="#" class="btn btn-warning">Beli</a>
                      </div>
                    </div>

                  </div>
                  <div class="col-md">
                    <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
                    <div class="card">
                      <img src=" foto/topeng.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Topeng Kayu Batik Yogyakarta</h5>
                        <p class="card-text">Rp. 230.000</p>
                        <a href="#" class="btn btn-warning">Beli</a>
                      </div>
                    </div>

                  </div>

                  <div class="col-md">
                    <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
                    <div class="card"">
                <img src=" foto/sepatu.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Sepatu Wanita Batik Yogyakarta</h5>
                        <p class="card-text">Rp. 140.000</p>
                        <a href="#" class="btn btn-warning">Beli</a>
                      </div>
                    </div>

                  </div>


@endsection