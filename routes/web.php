<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PengusulController;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\items\BentukKegiatanController;
use App\Http\Controllers\items\KriteriaMitraController;
use App\Http\Controllers\items\StatusKerjasamaController;
use App\Http\Controllers\kerjasama\SasaranKinerjaController;
use App\Http\Controllers\kerjasama\MitraController;

Route::get('/', function () {
    return view('index');
});

Route::get('/news', function() {
    return view('news');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Auth::routes();
Route::group(['middleware' => ['auth']], function() {

    // Pimpinan

    Route::get('/pimpinan',[PimpinanController::class,'index'])->name('pimpinan');
    Route::get('/kerjasama/{id}/ttd',[PimpinanController::class,'signature']);
    Route::get('/kerjasama/{id}/revision',[PimpinanController::class,'revision']);
    Route::get('/kerjasama/{id}/disapprove',[PimpinanController::class,'disaprove']);

    // Pengusul

    Route::resource('pengusul', PengusulController::class);
    Route::get('daftar/usulan', [PengusulController::class, 'daftar_usulan'])->name('daftar_usulan');
    Route::get('daftar/kerjasama', [PengusulController::class, 'daftar_kerjasama'])->name('daftar_kerjasama');
    Route::get('/kerjasama/{id}/ubah',[PengusulController::class,'edit']);
    Route::get('/kerjasama/{id}/hapus',[PengusulController::class,'destroy']);
    Route::post('daftar/kerjasama/update',[PengusulController::class,'update'])->name('kerjasama.update');
    Route::post('daftar/kerjasama', [PengusulController::class, 'simpan_kerjasama']);
    Route::get('access/user',[AccessController::class,'index'])->name("access.user");
    Route::get('access/user/create',[AccessController::class,'create'])->name("access.user.create");
    Route::get('access/user/{id}/delete',[AccessController::class,'delete']);
    Route::get('access/user/{id}/pengelola',[AccessController::class,'pengelola']);
    Route::get('access/user/{id}/pengusul',[AccessController::class,'pengusul']);
    Route::get('access/user/{id}/legal',[AccessController::class,'legal']);
    Route::get('access/user/{id}/pimpinan',[AccessController::class,'pimpinan']);

    // Pengelola

    Route::get('/pengelola',[PengelolaController::class,'index'])->name('pengelola');
    Route::get('/pengelola/usulan',[PengelolaController::class,'view'])->name('daftar_usulan_pen');
    Route::get('/pengelola/kerjasama',[PengelolaController::class,'view2'])->name('daftar_kerjasama_pen');
    Route::get('/pengelola/usulan/{id}/lihatkerjasama',[PengelolaController::class,'lihatkerjasama']);
    Route::get('/pengelola/file/{namafile}',[PengelolaController::class,'reviewfile']);
    Route::post('/pengelola/store_rev',[PengelolaController::class,'store_revisi']);
    Route::get('/pengelola/usulan/{id}/approve',[PengelolaController::class,'approved']);
    Route::get('/pengelola/usulan/{id}/disapprove',[PengelolaController::class,'disapproved']);

    // items Bentuk Kegiatan

    Route::get("/items/bentukkegiatan",[BentukKegiatanController::class,'index'])->name("kegiatan");
    Route::get("/items/bentukkegiatan/create",[BentukKegiatanController::class,'create'])->name("kegiatan.create");
    Route::post("/items/bentukkegiatan/store",[BentukKegiatanController::class,'store'])->name("kegiatan.store");
     Route::get("/items/bentukkegiatan/{id}/delete",[BentukKegiatanController::class,'destroy']);
     Route::get("/items/bentukkegiatan/{id}/edit",[BentukKegiatanController::class,'edit']);

    // items Kriteria Mitra

    Route::get("/items/kriteriamitra",[KriteriaMitraController::class,'index'])->name("kriteriamitra");
    Route::get("/items/kriteriamitra/create",[KriteriaMitraController::class,'create'])->name("kriteriamitra.create");
    Route::post("/items/kriteriamitra/store",[KriteriaMitraController::class,'store'])->name("kriteriamitra.store");
    Route::post("/items/kriteriamitra/{id}/delete",[KriteriaMitraController::class,'destroy']);

    // Items Status Kerjasama
    Route::get("/items/status",[StatusKerjasamaController::class,'index'])->name("status");
    Route::get("/items/status/create",[StatusKerjasamaController::class,'create'])->name("status.create");

    // Kerjasama 

    // Sasaran Kinerja (program)

    Route::get("/kerma/program",[SasaranKinerjaController::class,'index'])->name("program");

    // Mitra

    Route::get("/kerma/mitra",[MitraController::class,'index'])->name("mitra");

});

