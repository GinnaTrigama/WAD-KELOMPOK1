
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
    $getClient = DB::select('select * from akun where csrf = ?', [$csrf])
@endphp
@extends("template/profile")
@section('content')
  <div class="container w-50">
    <center>
      <h1>Profile</h1>
    </center>
    <form method="post" action="{{url("/edit_profile")}}">
      @csrf
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input value="{{$getClient[0]->email}}" type="text" readonly class="form-control-plaintext" id="staticEmail">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input name="nama" value="{{$getClient[0]->nama}}" class="form-control" id="nama" placeholder="Nama">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputNoHP" class="col-sm-2 col-form-label">No HP</label>
        <div class="col-sm-10">
          <input name="nohp" value="{{$getClient[0]->nohp}}" class="form-control" id="nohp" placeholder="No HP">
        </div>
      </div>
      <hr>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input name="password" value="" class="form-control" id="inputPassword" type="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPasswordC" class="col-sm-2 col-form-label">Password Confirm</label>
        <div class="col-sm-10">
          <input name="passwordc" class="form-control" id="inputPasswordC" type="password" placeholder="Password Confirm">
        </div>
      </div>
      <button class="btn btn-primary w-100">Submit</button>
      <a href="{{url("/")}}" class="btn btn-light w-100">Cancel</a>
    </form>
  </div>
  @endsection
  @endif