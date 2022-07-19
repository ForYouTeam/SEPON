<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuruRequest;
use App\Models\GuruModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;

class GuruController extends Controller
{
    public function index ()
    {
        $dbResult = GuruModel::all();
        return view('cms.page.Guru')->with('data', $dbResult);
    }
    
    public function createGuru(GuruRequest $request)
    {
        // return response()->json($request->all());
        try {
            $fileUpload = $request->file('path_img');
            $nameFile = $request->nama . '-' . $fileUpload->getClientOriginalName();

            $filePath = public_path('storage/path_img/');
            $fileUpload->move($filePath, $nameFile);
            $dataGuru = array();
            $dataGuru = $request->all();
            $dataGuru['path_img'] = $nameFile;
            $dbResult = GuruModel::create($dataGuru);
            $guru = array(
                'data' => $dbResult,
                'response' => array(
                    'icon' => 'success',
                    'title' => 'Tersimpan',
                    'message' => 'Data berhasil disimpan',
                ),
                'code' => 201
            );
        } catch (\Throwable $th) {
            $guru = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($guru, $guru['code']);
    }

    public function getGuruId($idGuru)
    {
        $id = Crypt::decrypt($idGuru);
        try {
            $dbResult = GuruModel::whereId($id)->first();
            if ($dbResult) {
                $guru = array(
                    'data' => $dbResult,
                    'code' => 201
                );
            } else {
                $guru = array(
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
            $guru = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($guru, $guru['code']);
    }

    public function updateGuru(GuruRequest $request, $idGuru)
    {
        try {
            $id = Crypt::decrypt($idGuru);
            $dbCon = GuruModel::whereId($id);
            $findId = $dbCon->first();

            $request->updated_at = Carbon::now();


            if ($findId) {
                $guru = array(
                    'data' => $dbCon->update($request->all()),
                    'response' => array(
                        'icon' => 'success',
                        'title' => 'Tersimpan',
                        'message' => 'Data berhasil disimpan',
                    ),
                    'code' => 201
                );
            } else {
                $guru = array(
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
            $guru = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($guru, $guru['code']);
    }

    public function deleteGuru($idGuru)
    {
        try {
            $id = Crypt::decrypt($idGuru);
            $dbCon = GuruModel::whereId($id);
            $findId = $dbCon->first();
            File::delete(public_path('storage/path_img/' . $findId->value('path_img')));
            if ($findId) {
                $guru = array(
                    'data' => $dbCon->delete(),
                    'response' => array(
                        'icon' => 'success',
                        'title' => 'Tersimpan',
                        'message' => 'Data berhasil disimpan',
                    ),
                    'code' => 201
                );
            } else {
                $guru = array(
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
            $guru = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($guru, $guru['code']);
    }

}
