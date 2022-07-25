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
            'profile' => ProfilModel::all(), 
            'guru' => GuruModel::limit('4')->get(), 
            'fasilitas' => FasilitasModel::all(), 
            'galeri' => GaleriModel::all(), 
        );
        return view('web.layout.userweb')->with('data', $data);
    }
}
