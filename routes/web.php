<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ppdbController;
use App\Http\Controllers\ppdbsController;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\SiswasControllerController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

// Route::get('/home', function () {
//     return 'Selamat datang';
// });

// Route::get('/about', function () {
//     return 'Selamat datang di about';
// });

// Route::get('/contact', function () {
//     return 'Selamat datang di contact';
// });

// Route::get('/ohayo/{nama}/{umur}', function ($nama, $umur) {
//     return 'Selamat datang nama saya : '. $nama ."<br>".'dan umur saya'. $umur;
// });

// Route::get('/king/{nama}/{temparlahir}/{kelamin}/{agama}/{alamat}', function ($nama, $tempatlahir, $jk, $agama, $alamat) {
//     return 'Selamat datang nama saya : '. $nama ."<br>".'lahir saya'. $tempatlahir."<br>".'jenis kelamin saya'. $jk."<br>".'agama saya'. $agama."<br>".'alamat saya'. $alamat;
// });

// Route::get('/hitung/{angka1}/{angka2}', function($angka1, $angka2){
//     return 'bilangan 1 : '. $angka1. "<br>". 'bilangan 2 : '. $angka2. "<br>". "hasilnya : ". $angka1 + $angka2;
// });


// Route::get('/latihan/{pembeli}/{telepon}/{jenis}/{barang}/{jumlah}/{pembayaran}', function ($pembeli, $telepon, $jenis, $barang, $jumlah, $pembayaran) {
//     if ($jenis == "handphone") {

//         if ($barang == "Poco") {
//             $harga = 3000000;
//         }elseif ($barang == "Samsung") {
//             $harga = 5000000;
//         }elseif ($barang == "Iphone") {
//             $harga = 15000000;
//         }else {
//             echo "hp tidak ada di daftar";
//         }
//     }

//     if ($jenis == "laptop") {

//         if ($barang == "Lenovo") {
//             $harga = 4000000;
//         }elseif ($barang == "Acer") {
//             $harga = 8000000;
//         }elseif ($barang == "Macbook") {
//             $harga = 20000000;
//         }else {
//             echo "laptop tidak ada di daftar";
//         }
//     }
//     if ($jenis == "tv") {

//         if ($barang == "Toshiba") {
//             $harga = 5000000;
//         }elseif ($barang == "Samsung") {
//             $harga = 8000000;
//         }elseif ($barang == "Lg") {
//             $harga = 10000000;
//         }else {
//             echo "tv tidak ada di daftar";
//         }
//     }

//     if ($pembayaran == "transfer") {
//         $potongan = 50000;
//     }elseif ($pembayaran == "cash") {
//         $potongan = "tidak ada potongan ganti dengan transfer agar mendapatkan potongan";
//     } else{
//         $potongan = 0;
//     }

//     $total = $harga * $jumlah;

//     if ($total > 10000000 ) {
//         $cashback = 500000;
//     }else {
//         $cashback = 0;
//     }
//     return"<center>".'Nama pembeli: ' .$pembeli. "<br>".
//     'No telepon pembeli :'. $telepon."<br>".
//     'Jenis barang : ' . $jenis . "<br>".
//     'Nama barang :'. $barang ."<br>".
//     'Harga barang :'. $harga . "<br>".
//     'Jumlah : ' .$jumlah. "<br>".
//     'Total :'. $total . "<br>".
//     'cashback :'. $cashback . "<br>".
//     'pembayaran :'. $pembayaran. "<br>".
//     'potongan : '. $potongan."<br>".
//     'Total pembayaran :'. $total - $cashback - $potongan.
//     "</center>";
// });

// Route::get('/Barang', function () {

//     $Barang = Barang::where('nama_barang','LIKE','%SUSU%')->get();
//     // $Barang = Barang::where('id',1)->get();
//     return view('tampil_barang' ,compact('Barang'));
// });


// Route::get('/Barang', function () {

//     $Barang = Barang::all();
//     return view('tampil_barang' ,compact('Barang'));
// });

// Route::get('/siswa', function () {

//     $data_siswa = ['Keyndra', 'napis', 'nabila', 'daffa', 'opet', 'agus'];

//     return view('tampil' ,compact('data_siswa'));
// });


// Route::get('/Post', function () {
//     $Post = Post::all();
//     return view('tampil_post' ,compact('Post'));
// });

// Route::get('/Barang', [PostsController::class, 'menampilkan']);
// Route::get('/Post', [PostsController::class, 'menampilkan2']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('siswa', SiswasController::class);

Route::resource('ppdb', ppdbsController::class);
