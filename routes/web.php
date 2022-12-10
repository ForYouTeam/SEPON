<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\cms\DashboardController;
use App\Http\Controllers\cms\FasilitasController;
use App\Http\Controllers\cms\GaleriController;
use App\Http\Controllers\cms\GuruController;
use App\Http\Controllers\cms\PendaftranController;
use App\Http\Controllers\cms\SiswaController;
use App\Http\Controllers\cms\WaliMuridController;
use App\Http\Controllers\web\PendaftaranSiswaController;
use App\Http\Controllers\web\UserDashController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserDashController::class, 'index'])->name('user.index');
Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::get('logout', 'logout')->name('logout');
    Route::get('register_account', 'registerAccount')->name('auth.register');
    Route::post('login/process', 'loginProcess')->name('login.process');
    Route::post('register/process', 'registerProcess')->name('register.process');
});
Route::middleware(['auth', 'role:super-admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::prefix('profile')->controller(DashboardController::class)->group(function () {
        Route::post('/', 'index')->name('dashboard.index');
        Route::post('/', 'createProfile');
        Route::get('/data', 'getProfile');
        Route::get('/data/{id}', 'getProfileId');
    });

    Route::prefix('walimurid')->controller(WaliMuridController::class)->group(function () {
        Route::get('/', 'getAllWaliMurid')->name('walimurid.index');
        Route::post('/', 'createWaliMurid');
        Route::get('/{id}', 'getWaliMuridById');
        Route::patch('/{id}', 'updateWaliMurid');
        Route::delete('/{id}', 'deleteWaliMurid');
    });
    Route::prefix('data-siswa')->controller(SiswaController::class)->group(function () {
        Route::get('/', 'index')->name('data-siswa.index');
        Route::post('/', 'createSiswa');
        Route::get('/{id}', 'getSiswaId');
        Route::patch('/{id}', 'updateSiswa');
        Route::delete('/{id}', 'deleteSiswa');
    });

    Route::prefix('guru')->controller(GuruController::class)->group(function () {
        Route::get('/', 'index')->name('guru.index');
        Route::post('/', 'createGuru');
        Route::get('/data/{id}', 'getGuruId');
        Route::post('/{id}', 'updateGuru');
        Route::delete('/{id}', 'deleteGuru');
    });

    Route::prefix('galeri')->controller(GaleriController::class)->group(function () {
        Route::get('/', 'index')->name('galeri.index');
        Route::post('/', 'createGaleri');
        Route::get('/data/{id}', 'getGaleriId');
        Route::post('/{id}', 'updateGaleri');
        Route::delete('/{id}', 'deleteGaleri');
    });

    Route::prefix('fasilitas')->controller(FasilitasController::class)->group(function () {
        Route::get('/', 'index')->name('fasilitas.index');
        Route::post('/', 'createFasilitas');
        Route::get('/{id}', 'getFasilitasId');
        Route::patch('/{id}', 'updateFasilitas');
        Route::delete('/{id}', 'deleteFasilitas');
    });
});


Route::prefix('pendaftar')->controller(PendaftranController::class)->middleware(['auth', 'role:super-admin|user'])->group(function () {
    Route::get('/', 'index')->name('pendaftar.index');
    Route::post('/', 'createPendaftar');
    Route::get('/filter/{id}', 'filterYears');
    Route::get('/data/{id}', 'getPendaftarId');
    Route::post('/{id}', 'updatePendaftar');
    Route::delete('/{id}', 'deletePendaftar');
});

Route::get('detail_profile/{id}', [PendaftranController::class, 'buktiPendaftaran'])->middleware('auth')->name('paper');
Route::prefix('user')->controller(PendaftaranSiswaController::class)->middleware(['auth', 'role:super-admin|user'])->group(function () {
    Route::get('/pendaftaran_siswa', 'index')->name('pendaftaran_siswa.index');
    Route::post('/pendaftaran_process', 'createWaliMurid');
});
