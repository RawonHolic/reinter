<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\JabatanController;

Route::get('/edit-biodata', [ProfileController::class, 'editBiodata'])->name('edit.biodata');
Route::post('/update-biodata', [ProfileController::class, 'updateBiodata'])->name('update.biodata');

Route::get('/edit-pendidikan', [ProfileController::class, 'editRiwayatPendidikan'])->name('edit.pendidikan');
Route::post('/update-pendidikan', [ProfileController::class, 'updateRiwayatPendidikan'])->name('update.pendidikan');

Route::get('/edit-pengalaman', [ProfileController::class, 'editPengalaman'])->name('edit.pengalaman');
Route::post('/update-pengalaman', [ProfileController::class, 'updatePengalaman'])->name('update.pengalaman');

Route::middleware(['guest'])->group(function() {
    Route::post('/login', [AuthController::class, 'doLogin'])->name('login');
    Route::post('/register', [AuthController::class, 'doRegister']);

});

Route::middleware(['auth'])->group(function() {
    Route::get('/home', function () {
        return redirect('/');
    });
});

Route::get('/logout', function (Request $request) {
    $request->session()->flush();
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::group(['middleware' => 'cekStatusLogin'], function()
{
    //All the routes that belongs to the group goes here
    Route::get('/', [DashboardController::class, 'dataDosen'])->name('home');

    Route::get('/dashboard', [DashboardController::class, 'dataDosen'])->name('dashboard');

    Route::get('/profil', function () {
        return view('profil');
    });
    
    Route::get('/editbiodata', function () {
        return view('editbiodata');
    });
    
    Route::get('/editpendidikan', function () {
        return view('editpendidikan');
    });
    
    Route::get('/editpengalaman', function () {
        return view('editpengalaman');
    });
    
    Route::get('/karya', function () {
        return view('karya');
    });
    
    Route::get('/tambahkarya', function () {
        return view('tambahkarya');
    });
    
    Route::get('/editkarya', function () {
        return view('editkarya');
    });
    
    Route::get('/pengajaran', function () {
        return view('pengajaran');
    });
    
    Route::get('/tambahmatkul', function () {
        return view('tambahmatkul');
    });
    
    Route::get('/editmatkul', function () {
        return view('editmatkul');
    });
    
    Route::get('/artikel', function () {
        return view('artikel');
    });
    
    Route::get('/tambahartikel', function () {
        return view('tambahartikel');
    });
    
    Route::get('/editartikel', function () {
        return view('editartikel');
    });
    
    Route::get('/seminar', function () {
        return view('seminar');
    });
    
    Route::get('/tambahseminar', function () {
        return view('tambahseminar');
    });
    
    Route::get('/editseminar', function () {
        return view('editseminar');
    });
    
    Route::get('/kegiatan', function () {
        return view('kegiatan');
    });
    
    Route::get('/tambahkegiatan', function () {
        return view('tambahkegiatan');
    });
    
    Route::get('/editkegiatan', function () {
        return view('editkegiatan');
    });
    
    Route::get('/jabatan', function () {
        return view('jabatan');
    });

    Route::get('/jabatan', [JabatanController::class, 'dataJabatanDosen'])->name('jabatan');
    Route::post('/update-jabatan', [JabatanController::class, 'updateJabatan'])->name('update.jabatan');
});

Route::get('/register', [ProdiController::class, 'namaProdi'])->name('register');