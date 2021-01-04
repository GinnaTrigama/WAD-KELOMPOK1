@php
$csrf = csrf_token();
$result = DB::select('select * from akun where csrf = ?', [$csrf]);
@endphp
@if ($result == null) 
<script type="text/javascript">
  window.location = "{{ url('/login') }}";//here double curly bracket
</script>
@else
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

@php
$csrf = csrf_token();
$resulmain = DB::select('select * from akun where csrf = ?', [$csrf]);
@endphp
<body>

  <nav class="navbar shadow navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url("/")}}"><img src="logojog.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url("/")}}">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kategori
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url("/makanan")}}">Makanan</a>
            <a class="dropdown-item" href="{{url("/pakaian")}}">Pakaian</a>
            <a class="dropdown-item" href="{{url("/kerajinan")}}">Kerajinan</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Bantuan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="about_us.php">Cara Belanja</a>
            <a class="dropdown-item" href="about_us.php">Cara Menjadi Vendor</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{url('/about_us')}}">Tentang Kami</a>
            <a class="dropdown-item" href="sk.php">Syarat dan Ketentuan</a>
            <a class="dropdown-item" href="hk.php">Hubungi Kami</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/keranjang')}}">Keranjang</a>
        </li>
        @if ($resulmain[0]->role == "admin") 
        <li class="nav-item">
          <a class="nav-link" href="{{url('/tambah_produk')}}">Tambah Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/hapusedit_produk')}}">Hapus / Edit Produk</a>
        </li>
        @endif
      </ul>
      
      <form class="form-inline my-2 my-lg-0" action="{{url("/search")}}" method="get">
        @csrf
        <a class="nav-link" href="{{url("/profile")}}">
        
        @if ($resulmain[0]->role == "admin")
        <img src="foto/admin.png" width="50px" alt=""> <span class="sr-only">(current)</span></a>
        @else
        <img src="foto/guest.png" width="50px" alt=""> <span class="sr-only">(current)</span></a>
        @endif
      
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  @yield("content");
  
  <br><br>
  <div class="footer text-muted text-center" style="background-color: white;">
    © 2020 Copyright: Oleh - Oleh Yogya
  </div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>
@endif