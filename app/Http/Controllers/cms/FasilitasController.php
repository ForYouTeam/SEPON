<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\FasilitasRequest;
use App\Models\FasilitasModel;
use App\Models\GaleriModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class FasilitasController extends Controller
{
    public function index ()
    {
        $data = array(
            'galeri' => GaleriModel::all(), 
            'fasilitas' => FasilitasModel::all(), 
        );
        return view('cms.page.Fasilitas')->with('data', $data);
    }
    public function createFasilitas(FasilitasRequest $request)
    {
        try {
            $dbResult = FasilitasModel::create($request->all());
            $fasilitas = array(
                'data' => $dbResult,
                'response' => array(
                    'icon' => 'success',
                    'title' => 'Tersimpan',
                    'message' => 'Data berhasil disimpan',
                ),
                'code' => 201
            );
        } catch (\Throwable $th) {
            $fasilitas = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($fasilitas, $fasilitas['code']);
    }

    public function getFasilitasId($idFasilitas)
    {
        $id = Crypt::decrypt($idFasilitas);
        try {
            $dbResult = FasilitasModel::whereId($id)->first();
            if ($dbResult) {
                $fasilitas = array(
                    'data' => $dbResult,
                    'code' => 201
                );
            } else {
                $fasilitas = array(
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
            $fasilitas = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($fasilitas, $fasilitas['code']);
    }

    public function updateFasilitas(FasilitasRequest $request, $idFasilitas)
    {
        try {
            $id = Crypt::decrypt($idFasilitas);
            $dbCon = FasilitasModel::whereId($id);
            $findId = $dbCon->first();

            $request->updated_at = Carbon::now();


            if ($findId) {
                $fasilitas = array(
                    'data' => $dbCon->update($request->all()),
                    'response' => array(
                        'icon' => 'success',
                        'title' => 'Tersimpan',
                        'message' => 'Data berhasil disimpan',
                    ),
                    'code' => 201
                );
            } else {
                $fasilitas = array(
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
            $fasilitas = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($fasilitas, $fasilitas['code']);
    }

    public function deleteFasilitas($idFasilitas)
    {
        try {
            $id = Crypt::decrypt($idFasilitas);
            $dbCon = FasilitasModel::whereId($id);
            $findId = $dbCon->first();
            if ($findId) {
                $fasilitas = array(
                    'data' => $dbCon->delete(),
                    'response' => array(
                        'icon' => 'success',
                        'title' => 'Tersimpan',
                        'message' => 'Data berhasil disimpan',
                    ),
                    'code' => 201
                );
            } else {
                $fasilitas = array(
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
            $fasilitas = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($fasilitas, $fasilitas['code']);
    }
}
