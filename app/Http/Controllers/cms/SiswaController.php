<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiswaRequest;
use App\Models\SiswaModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class SiswaController extends Controller
{
    public function index ()
    {
        $dbResult = SiswaModel::all();
        return view('cms.page.Siswa')->with('data', $dbResult);
    }
    public function createSiswa(SiswaRequest $request)
    {
        try {
            $dbResult = SiswaModel::create($request->all());
            $siswa = array(
                'data' => $dbResult,
                'response' => array(
                    'icon' => 'success',
                    'title' => 'Tersimpan',
                    'message' => 'Data berhasil disimpan',
                ),
                'code' => 201
            );
        } catch (\Throwable $th) {
            $siswa = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($siswa, $siswa['code']);
    }

    public function getSiswaId($idSiswa)
    {
        $id = Crypt::decrypt($idSiswa);
        try {
            $dbResult = SiswaModel::whereId($id)->first();
            if ($dbResult) {
                $siswa = array(
                    'data' => $dbResult,
                    'code' => 201
                );
            } else {
                $siswa = array(
                    'data' => null,
                    'response' => array(
                        'icon' => 'warning',
                        'title' => 'Tidak Ditemukan',
                        'message' => 'Data tidak tersedia',
                    ),
                    'code' => 404
                );
            }
        } catch (\Throwable $th) {
            $siswa = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($siswa, $siswa['code']);
    }

    public function updateSiswa(SiswaRequest $request, $idSiswa)
    {
        try {
            $id = Crypt::decrypt($idSiswa);
            $dbCon = SiswaModel::whereId($id);
            $findId = $dbCon->first();

            $request->updated_at = Carbon::now();


            if ($findId) {
                $siswa = array(
                    'data' => $dbCon->update($request->all()),
                    'response' => array(
                        'icon' => 'success',
                        'title' => 'Tersimpan',
                        'message' => 'Data berhasil disimpan',
                    ),
                    'code' => 201
                );
            } else {
                $siswa = array(
                    'data' => null,
                    'response' => array(
                        'icon' => 'warning',
                        'title' => 'Tidak Ditemukan',
                        'message' => 'Data tidak tersedia',
                    ),
                    'code' => 404
                );
            }
        } catch (\Throwable $th) {
            $siswa = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($siswa, $siswa['code']);
    }

    public function deleteSiswa($idSiswa)
    {
        try {
            $id = Crypt::decrypt($idSiswa);
            $dbCon = SiswaModel::whereId($id);
            $findId = $dbCon->first();
            if ($findId) {
                $siswa = array(
                    'data' => $dbCon->delete(),
                    'response' => array(
                        'icon' => 'success',
                        'title' => 'Tersimpan',
                        'message' => 'Data berhasil disimpan',
                    ),
                    'code' => 201
                );
            } else {
                $siswa = array(
                    'data' => null,
                    'response' => array(
                        'icon' => 'warning',
                        'title' => 'Tidak Ditemukan',
                        'message' => 'Data tidak tersedia',
                    ),
                    'code' => 404
                );
            }
        } catch (\Throwable $th) {
            $siswa = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($siswa, $siswa['code']);
    }
}
