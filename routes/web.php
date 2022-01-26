<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotpassController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\RuangLabController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\RuangGuruController;
use App\Http\Controllers\Admin\ContentManagement\Profile\VisidanMisiController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\PerpustakaanController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\MusholaController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\KantinController;
use App\Http\Controllers\Admin\Pendaftaran\PendaftaranController;
use App\Http\Controllers\Admin\ContentManagement\Profile\GurudanKaryawanController;
use App\Http\Controllers\Admin\ContentManagement\Galeri\GaleriFotoController;
use App\Http\Controllers\Admin\ContentManagement\Galeri\GaleriVideoController;
use App\Http\Controllers\Admin\ContentManagement\Berita\ContentBeritaController;
use App\Http\Controllers\Admin\ContentManagement\Kontak\KontakController;

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

Route::get('/',[DashboardController::class,'index'])->name('dashboard');

//Dashboard
Route::get('/dashboard/totalguru',[TotalGuruController::class,'userview'])->name('totalguru');


// Pendaftaraan
Route::get('/pendaftaran',[PendaftaranController::class,'userview'])->name('pendaftaran');
Route::post('/pendaftaran',[PendaftaranController::class,'daftar'])->name('pendaftaran');



// Fasilitas
Route::get('/fasilitas/ruanglab',[RuangLabController::class,'userview'])->name('ruanglab');
Route::get('/fasilitas/ruangguru',[RuangGuruController::class,'userview'])->name('ruangguru');
Route::get('/fasilitas/perpustakaan',[PerpustakaanController::class,'userview'])->name('perpustakaan');
Route::get('/fasilitas/mushola',[MusholaController::class,'userview'])->name('mushola');
Route::get('/fasilitas/kantin',[KantinController::class,'userview'])->name('kantin');

// Profile
Route::get('/profile/visidanmisi',[VisidanMisiController::class,'userview'])->name('visidanmisi');
Route::get('/profile/gurudankaryawan',[GurudanKaryawanController::class,'userview'])->name('gurudankaryawan');

// Galeri
Route::get('/galeri/galerifoto',[GaleriFotoController::class,'userview'])->name('galerifoto');
Route::get('/galeri/galerivideo',[GaleriVideoController::class,'userview'])->name('galerivideo');

// Berita
Route::get('/berita',[ContentBeritaController::class,'userview'])->name('berita');
Route::get('/berita/{id}',[ContentBeritaController::class,'content'])->name('contentberita');

// Kontak
Route::get('/kontak',[KontakController::class,'userview'])->name('kontak');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('login',[LoginController::class,'login'])->name('loginFun');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index']);

Route::get('/forgotpass',[ForgotpassController::class, 'index']);
Route::post('/forgotpass',[ForgotpassController::class, 'sendlink'])->name('sendlink');

Route::get('/reset',[ResetController::class, 'index']);
