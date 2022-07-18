<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\WaliMuridRequest;
use App\Models\WaliMuridModel;
use Illuminate\Http\Request;

class WaliMuridController extends Controller
{
    public function getAllWaliMurid()
    {
        return view('cms.page.WaliMurid');
    }

    public function createWaliMurid(WaliMuridRequest $request)
    {
        try {
            $image = $request->file('path_img');
            $nik = $request->nik;
            $status = $request->status_dalam_keluarga;
            $image_name = $nik . "-" . $image->getClientOriginalName();
            $filePath = public_path('storage\walimurid\\' . $nik . "\\" . $status);

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
                'path_img',
            ]);
            $data['path_img'] = $filePath;
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

            $image->move($filePath, $image_name);
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
