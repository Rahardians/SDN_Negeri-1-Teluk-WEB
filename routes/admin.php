<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\KantinController;
use App\Http\Controllers\Admin\ContentManagement\Dashboard\EkstraController;
use App\Http\Controllers\Admin\ContentManagement\Dashboard\TotalGuruController;
use App\Http\Controllers\Admin\ContentManagement\Dashboard\HeaderController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\MusholaController;
use App\Http\Controllers\Admin\ContentManagement\Galeri\GaleriFotoController;
use App\Http\Controllers\Admin\ContentManagement\Galeri\GaleriVideoController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\RuangLabController;
use App\Http\Controllers\Admin\ContentManagement\Dashboard\PrestasiController;
use App\Http\Controllers\Admin\ContentManagement\Dashboard\SambutanController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\RuangGuruController;
use App\Http\Controllers\Admin\ContentManagement\Profile\VisidanMisiController;
use App\Http\Controllers\Admin\ContentManagement\Berita\ContentBeritaController;
use App\Http\Controllers\Admin\ContentManagement\Fasilitas\PerpustakaanController;
use App\Http\Controllers\Admin\ContentManagement\Profile\GurudanKaryawanController;
use App\Http\Controllers\Admin\ContentManagement\Kontak\KontakController;
use App\Http\Controllers\Admin\ContentManagement\User\UserController;
use App\Http\Controllers\Admin\Pendaftaran\PendaftaranController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\Siswa\SiswaController;
use App\Http\Controllers\Admin\Kelas\KelasController;


Route::group(['middleware' => ["Admin"], 'as' => 'adm.'], function() {
    // Dashboard Admin
    Route::get('/admin',[DashboardController::class,'index'])->name('dashboardadmin');
    // Conten Management Dashboard Sambutan
    Route::get('/admin/dashboard/sambutan',[SambutanController::class,'index'])->name('sambutan');
    //add dashboard sambutan
    Route::get('/admin/dashboard/sambutan/add',[SambutanController::class,'add'])->name('addsambutan');
    Route::post('/admin/dashboard/sambutan/add',[SambutanController::class,'store'])->name('storesambutan');
     // edit sambutan
     Route::get('/admin/dashboard/sambutan/edit/{id}',[SambutanController::class,'edit'])->name('editsambutan');
     Route::post('/admin/dashboard/sambutan/update/{id}',[SambutanController::class,'update'])->name('updatesambutan');
     // Delete dashboard sambutan
    Route::get('/admin/dashboard/sambutan/delete/{id}',[SambutanController::class,'destroy'])->name('deletesambutan');
    
    // Conten Management Dashboard Prestasi
    Route::get('/admin/dashboard/prestasi',[PrestasiController::class,'index'])->name('prestasi');
    // Conten Management Dashboard Prestasi
    Route::get('/admin/dashboard/prestasi',[PrestasiController::class,'index'])->name('prestasi');
    // Add Dashboard Prestasi
    Route::get('/admin/dashboard/prestasi/add',[PrestasiController::class,'add'])->name('addprestasi');
    Route::post('/admin/dashboard/prestasi/add',[PrestasiController::class,'store'])->name('storeprestasi');
    //Edit Dashboard Prestasi
    Route::get('/admin/dashboard/prestasi/edit/{id}',[PrestasiController::class,'edit'])->name('editprestasi');
    Route::post('/admin/dashboard/prestasi/update/{id}',[PrestasiController::class,'update'])->name('updateprestasi');
    // Delete Dashboard Prestasi
    Route::get('/admin/dashboard/prestasi/delete/{id}',[PrestasiController::class,'destroy'])->name('deleteprestasi');




    // Conten Management Dashboard Ekstrakulikuler
    Route::get('/admin/dashboard/ekstra',[EkstraController::class,'index'])->name('ekstra');
     // Add Dashboard Ekstrakulikuler
     Route::get('/admin/dashboard/ekstra/add',[EkstraController::class,'add'])->name('addekstra');
     Route::post('/admin/dashboard/ekstra/add',[EkstraController::class,'store'])->name('storeekstra');
     //Edit Dashboard Ekstrakulikuler
     Route::get('/admin/dashboard/ekstra/edit/{id}',[EkstraController::class,'edit'])->name('editekstra');
     Route::post('/admin/dashboard/ekstra/update/{id}',[EkstraController::class,'update'])->name('updateekstra');
     // Delete Dashboard Ekstrakulikuler
     Route::get('/admin/dashboard/ekstra/delete/{id}',[EkstraController::class,'destroy'])->name('deleteekstra');


    // Conten Management Dashboard TotalGUru
    Route::get('/admin/dashboard/totalguru',[TotalGuruController::class,'index'])->name('totalguru');
    
    // Conten management Dashboard Header
    Route::get('/admin/dashboard/header',[HeaderController::class,'index'])->name('header');
    // Add Content Dashboard Header
    Route::get('/admin/dashboard/header/add',[HeaderController::class,'add'])->name('addheader');
    Route::post('/admin/dashboard/header/add',[HeaderController::class,'store'])->name('storeheader');
    //Edit Content Dashboard Header
    Route::get('/admin/dashboard/header/edit/{id}',[HeaderController::class,'edit'])->name('editheader');
    Route::post('/admin/dashboard/header/update/{id}',[HeaderController::class,'update'])->name('updateheader');
    // Delete Content Dashboard Header
    Route::get('/admin/dashboard/header/delete/{id}',[HeaderController::class,'destroy'])->name('deleteheader');

    // Add totalguru
    Route::get('/admin/dashboard/totalguru/add',[TotalGuruController::class,'add'])->name('addtotalguru');
    Route::post('/admin/dashboard/totalguru/add',[TotalGuruController::class,'store'])->name('storetotalguru');
    // Fasilitas Ruang Lab
    Route::get('/admin/fasilitas/ruanglab',[RuangLabController::class,'index'])->name('ruanglab');
    // Add Fasilitas Ruang Lab
    Route::get('/admin/fasilitas/ruanglab/add',[RuangLabController::class,'add'])->name('addruanglab');
    Route::post('/admin/fasilitas/ruanglab/add',[RuangLabController::class,'store'])->name('storeruanglab');
    // Edit Fasilitas Ruang Lab
    Route::get('/admin/fasilitas/ruanglab/edit/{id}',[RuangLabController::class,'edit'])->name('editruanglab');
    Route::post('/admin/fasilitas/ruanglab/update/{id}',[RuangLabController::class,'update'])->name('updateruanglab');
    // Delete Fasilitas Ruang Lab
    Route::get('/admin/fasilitas/ruanglab/delete/{id}',[RuangLabController::class,'destroy'])->name('deleteruanglab');

    // Fasilitas Kantin
    Route::get('/admin/fasilitas/kantin',[KantinController::class,'index'])->name('kantin');
     // Conten Management Dashboard Guru dan Karyawan
     Route::get('/admin/profile/gurudankaryawan',[GurudanKaryawanController::class,'index'])->name('gurudankaryawan');
     // Edit Guru dan Karyawan
     Route::get('/admin/dashboard/toalguru/edit/{id}',[TotalGuruController::class,'edit'])->name('edittotalguru');
     Route::post('/admin/dashboard/totalguru/update/{id}',[TotalGuruController::class,'update'])->name('updatetotalguru');
    //  delete total guru
    Route::get('/admin/dashboard/totalguru/delete/{id}',[TotalGuruController::class,'destroy'])->name('deletetotalguru');
    // Add Fasilitas Kantin
    Route::get('/admin/fasilitas/kantin/add',[KantinController::class,'add'])->name('addkantin');
    Route::post('/admin/fasilitas/kantin/add',[KantinController::class,'store'])->name('storekantin');
    // Edit Fasilitas Kantin
    Route::get('/admin/fasilitas/kantin/edit/{id}',[KantinController::class,'edit'])->name('editkantin');
    Route::post('/admin/fasilitas/kantin/update/{id}',[KantinController::class,'update'])->name('updatekantin');
    // Delete Fasilitas Kantin
    Route::get('/admin/fasilitas/kantin/delete/{id}',[KantinController::class,'destroy'])->name('deletekantin');

    // Conten Management Dashboard Guru dan Karyawan
    Route::get('/admin/profile/gurudankaryawan',[GurudanKaryawanController::class,'index'])->name('gurudankaryawan');
    // Add Guru dan Karyawan
    Route::get('/admin/profile/gurudankaryawan/add',[GurudanKaryawanController::class,'add'])->name('addgurudankaryawan');
    Route::post('/admin/profile/gurudankaryawan/add',[GurudanKaryawanController::class,'store'])->name('storegurudankaryawan');
    //Edit Guru dan Karyawan
    Route::get('/admin/profile/gurudankaryawan/edit/{id}',[GurudanKaryawanController::class,'edit'])->name('editgurudankaryawan');
    Route::post('/admin/profile/gurudankaryawan/update/{id}',[GurudanKaryawanController::class,'update'])->name('updategurudankaryawan');
    // Delete Guru dan Karyawan
    Route::get('/admin/profile/gurudankaryawan/delete/{id}',[GurudanKaryawanController::class,'destroy'])->name('deletegurudankaryawan');

     // Content Management Dashboard Visi dan Misi
     Route::get('/admin/profile/visidanmisi',[VisidanMisiController::class,'index'])->name('visidanmisi');
     // Add Visidanmisi
     Route::get('/admin/profile/visidanmisi/add',[VisidanMisiController::class,'add'])->name('addvisidanmisi');
     Route::post('/admin/profile/visidanmisi/add',[VisidanMisiController::class,'store'])->name('storevisidanmisi');
     //Edit Visidanmisi
     Route::get('/admin/profile/visidanmisi/edit/{id}',[VisidanMisiController::class,'edit'])->name('editvisidanmisi');
    Route::post('/admin/profile/visidanmisi/update/{id}',[VisidanMisiController::class,'update'])->name('updatevisidanmisi');
    // Delete Content Berita
    Route::get('/admin/profile/visidanmisi/delete/{id}',[VisidanMisiController::class,'destroy'])->name('deletevisidanmisi');

    // Content Management Berita
    Route::get('/admin/berita/contentberita',[ContentBeritaController::class,'index'])->name('contentberita');
    //Add Content Berita
    Route::get('/admin/berita/contentberita/add',[ContentBeritaController::class,'add'])->name('addcontentberita');
    Route::post('/admin/berita/contentberita/add',[ContentBeritaController::class,'store'])->name('storecontentberita');
    // Edit Content Berita
    Route::get('/admin/berita/contentberita/edit/{id}',[ContentBeritaController::class,'edit'])->name('editcontentberita');
    Route::post('/admin/berita/contentberita/update/{id}',[ContentBeritaController::class,'update'])->name('updatecontentberita');
    // Delete Content Berita
    Route::get('/admin/berita/contentberita/delete/{id}',[ContentBeritaController::class,'destroy'])->name('deletecontentberita');


    // Fasilitas Ruang Guru
    Route::get('/admin/fasilitas/ruangguru',[RuangGuruController::class,'index'])->name('ruangguru');
      // Add Fasilitas Ruang Guru
    Route::get('/admin/fasilitas/ruangguru/add',[RuangGuruController::class,'add'])->name('addruangguru');
    Route::post('/admin/fasilitas/ruangguru/add',[RuangGuruController::class,'store'])->name('storeruangguru');
    // Edit Fasilitas Ruang Guru
    Route::get('/admin/fasilitas/ruangguru/edit/{id}',[RuangGuruController::class,'edit'])->name('editruangguru');
    Route::post('/admin/fasilitas/ruangguru/update/{id}',[RuangGuruController::class,'update'])->name('updateruangguru');
    // Delete Fasilitas Ruang Guru
    Route::get('/admin/fasilitas/ruangguru/delete/{id}',[RuangGuruController::class,'destroy'])->name('deleteruangguru');


    // Galeri
    //galeri foto
    Route::get('/admin/galeri/galerifoto',[GaleriFotoController::class,'index'])->name('galerifoto');
    // Add galeri foto
    Route::get('/admin/galeri/galerifoto/add',[GaleriFotoController::class,'add'])->name('addgalerifoto');
    Route::post('/admin/galeri/galerifoto/add',[GaleriFotoController::class,'store'])->name('storegalerifoto');
    //Edit galeri foto
    Route::get('/admin/galeri/galerifoto/edit/{id}',[GaleriFotoController::class,'edit'])->name('editgalerifoto');
    Route::post('/admin/galeri/galerifoto/update/{id}',[GaleriFotoController::class,'update'])->name('updategalerifoto');
     // Delete galeri foto
     Route::get('/admin/galeri/galerifoto/delete/{id}',[GaleriFotoController::class,'destroy'])->name('deletegalerifoto');

     //Galeri Video
    Route::get('/admin/galeri/galerivideo',[GaleriVideoController::class,'index'])->name('galerivideo');
    // Add Fasilitas Ruang Lab
    Route::get('/admin/galeri/galerivideo/add',[GaleriVideoController::class,'add'])->name('addgalerivideo');
    Route::post('/admin/galeri/galerivideo/add',[GaleriVideoController::class,'post'])->name('postgalerivideo');
    //Edit galeri foto
    Route::get('/admin/galeri/galerivideo/edit/{id}',[GaleriVideoController::class,'edit'])->name('editgalerivideo');
    Route::post('/admin/galeri/galerivideo/update/{id}',[GaleriVideoController::class,'update'])->name('updategalerivideo');
    // Delete galeri video
    Route::get('/admin/galeri/galerivideo/delete/{id}',[GaleriVideoController::class,'destroy'])->name('deletegalerivideo');
     // Fasilitas Mushola
     Route::get('/admin/fasilitas/mushola',[MusholaController::class,'index'])->name('mushola');
     // Add Fasilitas Mushola
     Route::get('/admin/fasilitas/mushola/add',[MusholaController::class,'add'])->name('addmushola');
     Route::post('/admin/fasilitas/mushola/add',[MusholaController::class,'store'])->name('storemushola');
      // Edit Fasilitas Mushola
    Route::get('/admin/fasilitas/mushola/edit/{id}',[MusholaController::class,'edit'])->name('editmushola');
    Route::post('/admin/fasilitas/mushola/update/{id}',[MusholaController::class,'update'])->name('updatemushola');
     // Delete dashboard mushola
     Route::get('/admin/fasilitas/mushola/delete/{id}',[MusholaController::class,'destroy'])->name('deletemushola');

     // Fasilitas Perpustakaan
     Route::get('/admin/fasilitas/perpustakaan',[PerpustakaanController::class,'index'])->name('perpustakaan');
     // Add fasilitas Perpustakaan
     Route::get('/admin/fasilitas/perpustakaan/add',[PerpustakaanController::class,'add'])->name('addperpustakaan');
     Route::post('/admin/fasilitas/perpustakaan/add',[PerpustakaanController::class,'store'])->name('storeperpustakaan');
     //Edit Fasilitas
     Route::get('/admin/fasilitas/perpustakaan/edit/{id}',[PerpustakaanController::class,'edit'])->name('editperpustakaan');
     Route::post('/admin/fasilitas/perpustakaan/update/{id}',[PerpustakaanController::class,'update'])->name('updateperpustakaan');
     //Delete Fasilitas perpustakaan
     Route::get('/admin/fasilitas/perpustakaan/delete/{id}',[PerpustakaanController::class,'destroy'])->name('deleteperpustakaan');

     // Kontak
      Route::get('/admin/kontak',[KontakController::class,'index'])->name('kontak');
      // Add Kontak
      Route::get('/admin/kontak/add',[KontakController::class,'add'])->name('addkontak');
     Route::post('/admin/kontak/add',[KontakController::class,'store'])->name('storekontak');
      // Edit Kontak
      Route::get('/admin/kontak/edit/{id}',[KontakController::class,'edit'])->name('editkontak');
      Route::post('/admin/kontak/update',[KontakController::class,'update'])->name('updatekontak');
      // Delete Kontak
      Route::get('/admin/kontak/delete/{id}',[KontakController::class,'destroy'])->name('deletekontak');
      // User
      Route::get('/admin/user',[UserController::class,'index'])->name('user');
      // Add User
      Route::get('/admin/user/add',[UserController::class,'add'])->name('adduser');
      Route::post('/admin/user/add',[UserController::class,'store'])->name('storeuser');
      // Edit User
      Route::get('/admin/user/edit/{id}',[UserController::class,'edit'])->name('edituser');
      Route::post('/admin/user/edit/{id}',[UserController::class,'update'])->name('updateuser');
      // Delete User
      Route::get('/admin/user/delete/{id}',[UserController::class,'destroy'])->name('deleteuser');

      // Pendaftaran
      Route::get('/admin/pendaftaran',[PendaftaranController::class,'index'])->name('pendaftaran');
      Route::get('/admin/pendaftaran/terima/{id}',[PendaftaranController::class,'terima'])->name('terimapendaftaran');
      Route::get('/admin/pendaftaran/tolak/{id}',[PendaftaranController::class,'tolak'])->name('tolakpendaftaran');
      Route::get('/admin/pendaftaran/pengaturan',[ConfigurationController::class,'index'])->name('pengaturanpendaftaran');
      Route::get('/admin/pendaftaran/pengaturan/edit/{id}',[ConfigurationController::class,'update'])->name('updatepengaturanpendaftaran');
      

      // Siswa
      Route::get('/admin/siswa',[SiswaController::class,'index'])->name('siswa');

      // Kelas
      Route::get('/admin/kelas',[KelasController::class,'index'])->name('kelas');
      // Add kelas
      Route::get('/admin/kelas/add',[KelasController::class,'add'])->name('addkelas');
      Route::post('/admin/kelas/add',[KelasController::class,'store'])->name('storekelas');
      // Edit kelas
      Route::get('/admin/kelas/edit/{id}',[KelasController::class,'edit'])->name('editkelas');
      Route::post('/admin/kelas/edit/{id}',[KelasController::class,'update'])->name('updatekelas');
});
