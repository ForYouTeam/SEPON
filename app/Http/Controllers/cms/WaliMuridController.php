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
        $data = WaliMuridModel::select([
            'id', 'nik', 'nama', 'jk'
        ])->get();
        return view('cms.page.WaliMurid')->with('data', $data);
    }

    public function createWaliMurid(WaliMuridRequest $request)
    {
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

    public function getWaliMuridById($id)
    {
        try {
            $dbResult = WaliMuridModel::whereId($id)
                ->first();
            if ($dbResult) {
                $walimurid = array(
                    'data' => $dbResult,
                    'code' => 201
                );
            } else {
                $walimurid = array(
                    'data' => null,
                    'code' => 404
                );
            }
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

    public function updateWaliMurid($id, WaliMuridRequest $request)
    {
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
            $dbResult = WaliMuridModel::whereId($id)->update($data);
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

    public function deleteWaliMurid($id)
    {
        try {
            $dbResult = WaliMuridModel::whereId($id);
            if ($dbResult->first()) {
                $walimurid = array(
                    'data' => $dbResult->delete(),
                    'response' => array(
                        'icon' => 'success',
                        'title' => 'Terhapus',
                        'message' => 'Data berhasil dihapus',
                    ),
                    'code' => 201
                );
            } else {
                $walimurid = array(
                    'data' => null,
                    'response' => array(
                        'icon' => 'warning',
                        'title' => 'Not Found',
                        'message' => 'Data tidak tersedia',
                    ),
                    'code' => 404
                );
            }
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
