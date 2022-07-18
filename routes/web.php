<?php

use App\Http\Controllers\cms\SiswaController;
use Illuminate\Support\Facades\Route;

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
    return view('cms.page.Table');
});

Route::prefix('data-siswa')->controller(SiswaController::class)->group(function () {
    Route::get('/', 'index')->name('data-siswa.index');
    Route::post('/', 'createSiswa');
    Route::post('/{id}', 'geteSiswaId');
    Route::patch('/{id}', 'updateSiswa');
    Route::delete('/{id}', 'deleteSiswa');
});