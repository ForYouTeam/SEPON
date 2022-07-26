<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\FasilitasModel;
use App\Models\GaleriModel;
use App\Models\GuruModel;
use App\Models\ProfilModel;
use Illuminate\Http\Request;

class UserDashController extends Controller
{
    public function index()
    {
        $data = array(
            'profile' => ProfilModel::first() ? ProfilModel::first() : null, 
            'guru' => GuruModel::limit('4')->get(), 
            'fasilitas' => FasilitasModel::limit('6')->select(array('nama_ruangan','deskripsi'))->get(), 
            'galeri' => GaleriModel::all(), 
        );
        return view('web.layout.userweb')->with('data', $data);
    }
}
