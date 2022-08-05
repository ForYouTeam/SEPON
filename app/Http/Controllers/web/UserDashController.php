<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\FasilitasModel;
use App\Models\GaleriModel;
use App\Models\GuruModel;
use App\Models\ProfilModel;
use App\Models\SiswaModel;
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
            'count' => [
                'fasilitas' => FasilitasModel::count(),
                'lulusan' => 0,
                'guru' => GuruModel::count()
            ]
        );
        $lulus = SiswaModel::all();
        foreach ($lulus as $key => $value) {
            $laki = $value->lakilaki;
            $perempuan = $value->perempuan;
            $total = $laki + $perempuan;
            $data['count']['lulusan'] = $data['count']['lulusan'] + $total;
        }
        // return response()->json($data);
        return view('web.layout.userweb')->with('data', $data);
    }
}
