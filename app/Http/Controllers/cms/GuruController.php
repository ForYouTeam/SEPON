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
        $data = $request->only([
            'nama',
            'nip',
            'jk',
            'gol',
            'jabatan',
            'status_nikah',
            'path_img',
        ]);

        $file = $request->file('path_img');
        $filename = $request->nama . '.' . $file->getClientOriginalExtension();
        $filepath = 'storage/guru/';
        $data['path_img'] = $filepath . '/' . $filename;
        try {
            $dbResult = GuruModel::create($data);
            $guru = array(
                'data' => $dbResult,
                'response' => array(
                    'icon' => 'success',
                    'title' => 'Tersimpan',
                    'message' => 'Data berhasil disimpan',
                ),
                'code' => 201
            );
            $file->move($filepath, $filename);
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
        try {
            $id = Crypt::decrypt($idGuru);
            $dbResult = GuruModel::whereId($id)->first();
            if ($dbResult) {
                $guru = array(
                    'data' => $dbResult,
                    'code' => 201
                );
            } else {
                $guru = array(
                    'data' => null,
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

    public function updateGuru($idGuru, GuruRequest $request)
    { 
        try {
            $data = $request->only([
                'nama',
                'nip',
                'jk',
                'gol',
                'jabatan',
                'status_nikah',
                'path_img',
            ]);
            $dbResult = GuruModel::whereId($idGuru);
            $oldimg = $dbResult->value('path_img');

            if ($request->file('path_img')) {
                File::delete(public_path($oldimg));
                $file = $request->file('path_img');
                $filename = $request->nama . '.' . $file->getClientOriginalExtension();
                $filepath = 'storage/guru/';
                $data['path_img'] = $filepath . '/' . $filename;
                $file->move($filepath, $filename);
            }
            $guru = array(
                'data' => $dbResult->update($data),
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

    public function deleteGuru($idGuru)
    {
        $id = Crypt::decrypt($idGuru);
        $dbcon = GuruModel::whereId($id);
        $oldimg = $dbcon->value('path_img');
        try {
            if ($dbcon->first()) {
                File::delete(public_path($oldimg));
                $guru = array(
                    'data' => $dbcon->delete(),
                    'response' => array(
                        'icon' => 'success',
                        'title' => 'Terhapus',
                        'message' => 'Data berhasil dihapus',
                    ),
                    'code' => 201
                );
            } else {
                $guru = array(
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
