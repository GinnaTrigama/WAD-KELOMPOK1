<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', [MyController::class,"logout"]);
Route::get('/register', function () {
    return view('register');
});
Route::get('/keranjang', function () {
    return view('keranjang');
});
Route::get('/makanan', function () {
    return view('makanan');
});
Route::get('/pakaian', function () {
    return view('pakaian');
});
Route::get('/kerajinan', function () {
    return view('kerajinan');
});
Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/admin_reg', function () {
    return view('register_admin');
});
Route::get('/tambah_produk', function () {
    return view('tambah_produk');
});
Route::get('/hapusedit_produk', function () {
    return view('hapusedit_produk');
});
Route::get('/edit_keranjang/{id_keranjang}', function ($id_keranjang) {
    $keranj = DB::select('select * from keranjang where id = ?', [$id_keranjang]);
    $namaproduk = DB::select("select nama_produk from produk where id=?", [$keranj[0]->id_produk]);
    $jumlah = $keranj[0]->jumlah;
    return view('edit_keranjang',["namaproduk"=>$namaproduk[0]->nama_produk,"jumlah"=>$jumlah,"id_keranjang"=>$id_keranjang]);
});
Route::get('/hapus_keranjang/{id_keranjang}', function ($id_keranjang) {
    DB::delete("delete from keranjang where id = ?", [$id_keranjang]);
    return redirect("/keranjang");
});
Route::get('/produk/hapus/{id_produk}', function ($id_produk) {
    DB::delete("delete from produk where id = ?", [$id_produk]);
    return redirect("/hapusedit_produk");
});
Route::get('/produk/edit/{id_produk}', function ($id_produk) {
    $prod = DB::select("select * from produk where id = ?",[$id_produk]);
    return view("edit_produk",["produk"=>$prod[0]]);
});
Route::post('/edit_profile',[MyController::class, 'edit_profile']);
Route::post('/register_acc',[MyController::class, 'register']);
Route::post('/produk/tambah',[MyController::class, 'tambah_produk']);
Route::post('/produk/edit/confirm',[MyController::class, 'edit_produk']);
Route::post('/register_acc_admin',[MyController::class, 'register_admin']);
Route::post('/login_acc',[MyController::class, 'login']);
Route::post('/beli',[MyController::class, 'beli']);
Route::post('/edit/keranjang',[MyController::class, 'edit_keranjang']);
Route::get('/search', function () {
    return view('search');
});

