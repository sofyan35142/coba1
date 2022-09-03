<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\SupplierController;
use App\HTTP\Controllers\MahasiswaController;
use App\Http\Controllers\PembayaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

 // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // });

// Route::get('/', function () {
//     return view('landingpage.landingpage');
// });
// Route::get('/charts', function () {
//     return view('charts');
// });
// Route::get('/table', function () {
//     return view('table');
// });
// Route::get('/postlogin','loginController@postlogin')->name('login');


//heanphone

Route::post('/store', [MahasiswaController::class, 'store'])->name('store');
Route::post('/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/destroym/{id}', [MahasiswaController::class, 'destroym']);

//login register
route::get('/registrasi',[loginController::class,'registrasi'])->name('registrasi')->middleware('guest');
route::post('/simpanregistrasi',[loginController::class,'simpanregistrasi'])->name('simpanregistrasi');
route::get('/login',[loginController::class,'login'])->name('login')->middleware('guest');
route::post('/postlogin',[loginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[loginController::class,'logout'])->name('logout');


route::group(['middleware' => ['auth', 'ceklevel:admin']], function (){
    route::get('/dashboard',[loginController::class,'dashboard'])->name('dashboard');

//heanphone
Route::get('/table', [MahasiswaController::class,'table'])->name('table');
Route::get('/create', [MahasiswaController::class, 'create'])->name('create');
Route::get('/show/{id}', [MahasiswaController::class, 'show']);
Route::get('/rating/{id}', [RatingController::class, 'show']);


//pegawai
route::get('/pegawai',[PegawaiController::class,'pegawai'])->name('pegawai');
route::get('/tambahpegawai',[PegawaiController::class,'tambahpegawai'])->name('tambahpegawai');
route::get('/editpegawai/{id}',[PegawaiController::class,'editpegawai'])->name('editpegawai');

//supplier
route::get('/supplier',[SupplierController::class,'supplier'])->name('supplier');
route::get('/tambahsupplier',[SupplierController::class,'tambahsupplier'])->name('tambahsupplier');
route::get('/editsupplier/{id}',[SupplierController::class,'editsupplier'])->name('editsupplier');
route::post('/postsupplier',[SupplierController::class,'postsupplier'])->name('postsupplier');
route::post('/updatesupplier/{id}',[SupplierController::class,'updatesupplier'])->name('updatesupplier');
Route::get('/destroysup/{id}', [SupplierController::class, 'destroysup']);

//barang
route::get('/barang',[BarangController::class,'barang'])->name('barang');
route::get('/tambahbarang',[BarangController::class,'tambahbarang'])->name('tambahbarang');
route::get('/editbarang/{id}',[BarangController::class,'editbarang'])->name('editbarang');

    route::get('/',[loginController::class,'login'])->name('dashboard');
});

//user
route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function (){
    route::get('/dashboard',[loginController::class,'dashboard'])->name('dashboard');
    //pembeli
route::get('/pembeli',[PembeliController::class,'pembeli'])->name('pembeli');
route::get('/tambahpembeli',[PembeliController::class,'tambahpembeli'])->name('tambahpembeli');
route::get('/editpembeli/{id}',[PembeliController::class,'editpembeli'])->name('editpembeli');
route::post('/data-hp',[PembeliController::class,'datahp'])->name('datahp');
route::post('/edit-hp',[PembeliController::class,'edithp'])->name('edithp');

//heanphone
Route::get('/table', [MahasiswaController::class,'table'])->name('table');

//rating
route::get('/rating',[RatingController::class,'rating'])->name('rating');
route::get('/datarating',[RatingController::class,'datarating'])->name('datarating');
route::get('/tambahrating/{id}',[RatingController::class,'tambahrating'])->name('tambahrating');
route::post('/postrating',[RatingController::class,'postrating'])->name('postrating');
Route::get('/destroyra/{id}', [RatingController::class, 'destroyra']);

//pembayaran
route::get('/pembayaran',[PembayaranController::class,'pembayaran'])->name('pembayaran');
route::get('/datapembayaran',[PembayaranController::class,'datapembayaran'])->name('datapembayaran');
route::get('/tambahpembayaran/{id}',[PembayaranController::class,'tambahpembayaran'])->name('tambahpembayaran');
route::post('/postpembayaran',[PembayaranController::class,'postpembayaran'])->name('postpembayaran');
Route::get('/destroypem/{id}', [PembayaranController::class, 'destroypem']);

});

//pembeli

route::post('/postpembeli',[PembeliController::class,'postpembeli'])->name('postpembeli');
route::post('/updatepembeli/{id}',[PembeliController::class,'updatepembeli'])->name('updatepembeli');
Route::get('/destroyp/{id}', [PembeliController::class, 'destroyp']);

//pegawai

route::post('/postpegawai',[PegawaiController::class,'postpegawai'])->name('postpegawai');
route::post('/updatepegawai/{id}',[PegawaiController::class,'updatepegawai'])->name('updatepegawai');
Route::get('/destroype/{id}', [PegawaiController::class, 'destroype']);

//landingpage
Route::get('/', [PegawaiController::class, 'landing' ])->name('landing');

//supplier


//barang
route::post('/postbarang',[BarangController::class,'postbarang'])->name('postbarang');
route::post('/updatebarang/{id}',[BarangController::class,'updatebarang'])->name('updatebarang');
Route::get('/destroyb/{id}', [BarangController::class, 'destroyb']);





// Route::get('/datapembeli', [PembeliController::class,'index'])->name('datapembeli')->middleware('auth');
