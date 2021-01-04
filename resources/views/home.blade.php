@php
$csrf = csrf_token();
$result = DB::select('select * from akun where csrf = ?', [$csrf]);
@endphp
@extends("template/main")
@section('content')
<div class="container p-0 mt-5 mb-5 w-90 shadow rounded">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="foto/jogja.jpg" class="d-block w-100 rounded" alt="...">
      </div>
      <div class="carousel-item">
        <img src="foto/oleh1.jpg" class="d-block w-100 rounded" alt="...">
      </div>
      <div class="carousel-item">
        <img src="foto/gudeg.jpg" class="d-block w-100 rounded" alt="...">
      </div>
      <div class="carousel-item">
        <img src="foto/batik.jpg" class="d-block w-100 rounded" alt="...">
      </div>
      <div class="carousel-item">
        <img src="foto/dagadujog.jpg" class="d-block w-100 rounded" alt="...">
      </div>
      <div class="carousel-item">
        <img src="foto/monggo.jpg" class="d-block w-100 rounded" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="">
    <div class="container shadow" style="">
      <div class="row">
        <div class="pb-5 pt-5 col bg-light text-center shadow" style="background-image: url(batik.jpg);">
          <h2 style="text-shadow: 3px 2px 15px black; color: #ffe68a; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Merchandise Redjo</h2>
          <p style="text-shadow: 3px 2px 15px black; color:white;"><b><i> Produk Merchandise Dari Redjo</i></b></p>
        </div>
        <div class="w-100">
  
        </div>
        @php
            $merch = DB::select("select * from produk where kategori like ?", ["%merchandise%"]);
        @endphp
        @for ($i = 0; $i < count($merch); $i++)
        <div class="col p-4" style="background-color: rgb(248, 248, 248);">
          <img class="w-100 shadow" style="border-radius: 25px;" src="{{url($merch[$i]->gambar)}}">
          <div class="pl-3 pr-3 h-100">
            <p class="mt-3 font-weight-bold">{{$merch[$i]->nama_produk}}</p>
            <p></p>
            <hr>
            <p>Rp.{{$merch[$i]->harga}}<p>
              <form action="{{url("/beli")}}" method="post">
                @csrf
                <input type="hidden" name="id_produk" value="{{$merch[$i]->id}}">
                @if ($result != null)
                <input type="hidden" name="id_pembeli" value="{{$result[0]->id}}">
                @endif
                <button type="submit" name="barang" value="1" class="btn btn-warning">Beli</button>
                <button type="button" class="btn btn btn-info" data-toggle="modal" data-target="#myModal{{$i}}">
                  Detail Produk
                </button>
              </form>
                <div id="myModal{{$i}}" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- konten modal-->
                    <div class="modal-content">
                      <!-- heading modal -->
                      <div class="modal-header">
                        <h4 class="modal-title ">Detail Produk</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- body modal -->
                      <div class="modal-body">
                        <p>{{$merch[$i]->detail_produk}}</p>
                      </div>
                      <!-- footer modal -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
                      </div>
                    </div>
                  </div>
                </div>
  
          </div>
  
        </div>
        @endfor
  
        </div>
  
  
</div>


<div class="container mt-5">
  <div class="container">
  </div>
  <div class="row">
    <div class="col text-center">
      <h1><i> Produk Rekomendasi</i></h1>
      <h3 class="text-center" style="color: red;">Best sellers</h3>
      <br><br>
    </div>
  </div>
  <!-- jika ingin membuat card dibaris dua, copy row sampai div kedua terakhir -->
  <div class="row">
    @php
        $bess = DB::select('select * from produk where kategori like ?', ["%bestseller%"]);
    @endphp
    @for ($i = 0; $i < count($bess); $i++)
    <div class="col-md">
      <!-- tidak perlu pakai width, karena agar menyesuaikan dengan gambar lain di smapingnya -->
      <div class="card"">
        <img src="{{$bess[$i]->gambar}}" width="200px" height="auto" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$bess[$i]->nama_produk}}</h5>
          <p class="card-text">Rp.{{$bess[$i]->harga}}</p>
          <form action="{{url("/beli")}}" method="post">
            @csrf
            <input type="hidden" name="id_produk" value="{{$bess[$i]->id}}">
            
        @if ($result != null)
            <input type="hidden" name="id_pembeli" value="{{$result[0]->id}}">
            @endif
            <button type="submit" name="barang" value="1" class="btn btn-warning">Beli</button>
            <button type="button" class="btn btn btn-info" data-toggle="modal" data-target="#myModal{{$i}}b">
              Detail Produk
            </button>
          </form>
          <div id="myModal{{$i}}b" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- konten modal-->
              <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                  <h4 class="modal-title ">Detail Produk</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                  <p>{{$bess[$i]->detail_produk}}</p>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    @endfor
  </div> 
</div><br><br>


@endsection 