<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\cms\GaleriController;
use App\Http\Controllers\cms\GuruController;
use App\Http\Controllers\cms\PendaftranController;
use App\Http\Controllers\cms\SiswaController;
use App\Http\Controllers\cms\WaliMuridController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cms.page.Table');
});

Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::get('logout', 'logout')->name('logout');
    Route::post('login/process', 'loginProcess')->name('login.process');
});
Route::middleware(['auth', 'role:super-admin'])->group(function () {

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

    Route::prefix('pendaftar')->controller(PendaftranController::class)->group(function () {
        Route::get('/', 'index')->name('pendaftar.index');
        Route::post('/', 'createPendaftar');
        Route::get('/filter/{id}', 'filterYears');
        Route::get('/data/{id}', 'getPendaftarId');
        Route::post('/{id}', 'updatePendaftar');
        Route::delete('/{id}', 'deletePendaftar');
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
});
Route::get('detail_profile/{id}', [PendaftranController::class, 'buktiPendaftaran'])->middleware('auth')->name('paper');
