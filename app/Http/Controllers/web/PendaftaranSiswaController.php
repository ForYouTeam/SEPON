<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\WebPendaftaranRequest;
use App\Models\DetailSatuModel;
use App\Models\WaliMuridModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranSiswaController extends Controller
{
    public function index()
    {
        $data = WaliMuridModel::where('id_user', Auth::user()->id)->first();
        if ($data) {
            $siswa['siswa'] =  DetailSatuModel::where('id_ayah', $data->id)
                ->orWhere('id_ibu', $data->id)
                ->orWhere('id_wali', $data->id)
                ->with('pendaftar')
                ->get();

            foreach ($siswa['siswa'] as $key => $value) {
                $siswa['walimurid'] = array(
                    'ayah' => WaliMuridModel::whereId($value->id_ayah)
                        ->select(array('nama', 'pekerjaan'))
                        ->first(),
                    'ibu' => WaliMuridModel::whereId($value->id_ibu)
                        ->select(array('nama', 'pekerjaan'))
                        ->first()
                );
            }
        } else {
            $siswa = null;
        }
        // return response()->json($siswa);
        return view('web.page.PendaftaranSiswa')->with('data', $siswa);
    }

    public function createWaliMurid(WebPendaftaranRequest $request)
    {
        return response()->json($request->all());
        try {
            $data = $request->only([
                'nik',
                'nama',
                'jk',
                'tgl_lahir',
                'tempat_lahir',
                'agama',
                'pekerjaan',
                'status_dalam_keluarga',
                'hidup',
                'alamat',
                'penghasilan',
            ]);
            $dbResult = WaliMuridModel::create($data);
            $walimurid = array(
                'data' => $dbResult,
                'response' => array(
                    'icon' => 'success',
                    'title' => 'Tersimpan',
                    'message' => 'Data berhasil disimpan',
                ),
                'code' => 201
            );
        } catch (\Throwable $th) {
            $walimurid = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }
        return response()->json($walimurid, $walimurid['code']);
    }
}
