<?php

use App\Http\Controllers\cms\PendaftranController;
use App\Http\Controllers\cms\SiswaController;
use App\Http\Controllers\cms\WaliMuridController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cms.page.Table');
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
    Route::get('/{id}', 'getGuruId');
    Route::patch('/{id}', 'updateGuru');
    Route::delete('/{id}', 'deleteGuru');
});