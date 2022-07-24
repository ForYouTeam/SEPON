<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfilRequest;
use App\Models\GuruModel;
use App\Models\ProfilModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DashboardController extends Controller
{
    public function index ()
    {
        $data = array(
            'guru' => GuruModel::where('jabatan','Kepala Sekolah')->first() , 
            'profile' => ProfilModel::first() , 
        );
        return view('cms.page.Dashboard')->with('data', $data);
    }
    public function createProfile(ProfilRequest $request)
    {
        $data= $request->only([
            'nama_sekolah',
            'alamat',
            'desa',
            'kecamatan',
            'kabupaten',
            'provinsi',
            'telepon',
            'nama_yayasan',
            'status_sekolah',
            'visi',
            'misi',
        ]);
        try {
            $_id= $request->id;
            $dataBaseCon = new ProfilModel();
            if ($_id) {
                $dbResult = $dataBaseCon->whereId($_id)->update($data);
            } else {
                $dbResult = $dataBaseCon->create($data);
            }
            
            $profile = array(
                'data' => $dbResult,
                'response' => array(
                    'icon' => 'success',
                    'title' => 'Tersimpan',
                    'message' => 'Data berhasil disimpan',
                ),
                'code' => 201
            );
        } catch (\Throwable $th) {
            $profile = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($profile, $profile['code']);
    }

    public function getProfileId($id_Profile)
    {
        try {
            $dbResult = ProfilModel::whereId($id_Profile)->first();
            $dbResult->kepala_sekolah = GuruModel::where('jabatan', 'Kepala Sekolah')->select('nama')->first();
            
            if ($dbResult) {
                $profile = array(
                    'data' => $dbResult,
                    'code' => 201
                );
            } else {
                $profile = array(
                    'data' => null,
                    'code' => 404
                );
            }
        } catch (\Throwable $th) {
            $profile = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($profile, $profile['code']);
    }
}