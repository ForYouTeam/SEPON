<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendaftaranSiswaController extends Controller
{
    public function index()
    {
        return view('web.page.PendaftaranSiswa')->with('status', 'Berhasil Login');
    }
}
