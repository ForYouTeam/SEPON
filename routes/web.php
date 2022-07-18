<?php

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
