<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\GaleriRequest;
use App\Models\GaleriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    public function index ()
    {
        $dbResult = GaleriModel::all();
        return view('cms.page.Galeri')->with('data', $dbResult);
    }
    
    public function createGaleri(GaleriRequest $request)
    {
        $data = $request->only([
            'jenis',
            'deskripsi',
            'path_file',
        ]);

        $file = $request->file('path_file');
        $filename = $request->jenis . '.' . $file->getClientOriginalName();
        $filepath = 'storage/galeri/';
        $data['path_file'] = $filepath . '/' . $filename;
        try {
            $dbResult = GaleriModel::create($data);
            $galeri = array(
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
            $galeri = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($galeri, $galeri['code']);
    }

    public function getGaleriId($idGaleri)
    {
        try {
            $id = Crypt::decrypt($idGaleri);
            $dbResult = GaleriModel::whereId($id)->first();
            if ($dbResult) {
                $galeri = array(
                    'data' => $dbResult,
                    'code' => 201
                );
            } else {
                $galeri = array(
                    'data' => null,
                    'code' => 404
                );
            }
        } catch (\Throwable $th) {
            $galeri = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($galeri, $galeri['code']);
    }

    public function updateGaleri($idGaleri, GaleriRequest $request)
    { 
        try {
            $data = $request->only([
                'jenis',
                'deskripsi',
                'path_file',
            ]);
            $dbResult = GaleriModel::whereId($idGaleri);
            $oldimg = $dbResult->value('path_file');

            if ($request->file('path_file')) {
                File::delete(public_path($oldimg));
                $file = $request->file('path_file');
                $filename = $request->jenis . '.' . $file->getClientOriginalName();
                $filepath = 'storage/galeri/';
                $data['path_file'] = $filepath . '/' . $filename;
                $file->move($filepath, $filename);
            }
            $galeri = array(
                'data' => $dbResult->update($data),
                'response' => array(
                    'icon' => 'success',
                    'title' => 'Tersimpan',
                    'message' => 'Data berhasil disimpan',
                ),
                'code' => 201
            );
        } catch (\Throwable $th) {
            $galeri = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }
        return response()->json($galeri, $galeri['code']);
    }

    public function deleteGaleri($idGaleri)
    {
        $id = Crypt::decrypt($idGaleri);
        $dbcon = GaleriModel::whereId($id);
        $oldimg = $dbcon->value('path_file');
        try {
            if ($dbcon->first()) {
                File::delete(public_path($oldimg));
                $galeri = array(
                    'data' => $dbcon->delete(),
                    'response' => array(
                        'icon' => 'success',
                        'title' => 'Terhapus',
                        'message' => 'Data berhasil dihapus',
                    ),
                    'code' => 201
                );
            } else {
                $galeri = array(
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
            $galeri = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }
        return response()->json($galeri, $galeri['code']);
    }
}
