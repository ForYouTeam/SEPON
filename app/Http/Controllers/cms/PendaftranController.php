<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\PendaftaranRequest;
use App\Models\PendaftaranModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PendaftranController extends Controller
{
    public function index()
    {
        $years = Carbon::now()->format('Y');
        $data = PendaftaranModel::where('tahun_ajaran', $years)->get();
        return view('cms.page.Pendaftar')->with('data', $data);
    }

    public function filterYears($years)
    {
        try {
            $dbResult = PendaftaranModel::where('tahun_ajaran', $years)->get();
            if ($dbResult) {
                $pendaftar = array(
                    'data' => $dbResult,
                    'code' => 201
                );
            } else {
                $pendaftar = array(
                    'data' => null,
                    'code' => 404
                );
            }
        } catch (\Throwable $th) {
            $pendaftar = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }
        return response()->json($pendaftar, $pendaftar['code']);
    }

    public function createPendaftar(PendaftaranRequest $request)
    {
        $data = $request->only([
            'nama_lengkap',
            'nama_panggilan',
            'jk',
            'tempat_lahir',
            'tgl_lahir',
            'agama',
            'alamat',
            'path_img',
        ]);

        $years = Carbon::now()->format('Y');
        $file = $request->file('path_img');
        $filename = $request->nama_lengkap . '.' . $file->getClientOriginalExtension();
        $filepath = 'storage/pendaftar/';
        $data['path_img'] = $filepath . '/' . $filename;
        $data['tahun_ajaran'] = $years;
        try {
            $dbResult = PendaftaranModel::create($data);
            $pendaftar = array(
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
            $pendaftar = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($pendaftar, $pendaftar['code']);
    }

    public function getPendaftarId($id)
    {
        try {
            $dbResult = PendaftaranModel::whereId($id)->first();
            if ($dbResult) {
                $pendaftar = array(
                    'data' => $dbResult,
                    'code' => 201
                );
            } else {
                $pendaftar = array(
                    'data' => null,
                    'code' => 404
                );
            }
        } catch (\Throwable $th) {
            $pendaftar = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }

        return response()->json($pendaftar, $pendaftar['code']);
    }

    public function updatePendaftar($id, PendaftaranRequest $request)
    {
        try {
            $data = $request->only([
                'nama_lengkap',
                'nama_panggilan',
                'jk',
                'tempat_lahir',
                'tgl_lahir',
                'agama',
                'alamat',
                'path_img',
            ]);
            $dbResult = PendaftaranModel::whereId($id);
            $oldimg = $dbResult->value('path_img');

            if ($request->file('path_img')) {
                File::delete(public_path($oldimg));
                $file = $request->file('path_img');
                $filename = $request->nama_lengkap . '.' . $file->getClientOriginalExtension();
                $filepath = 'storage/pendaftar/';
                $data['path_img'] = $filepath . '/' . $filename;
                $file->move($filepath, $filename);
            }
            $pendaftar = array(
                'data' => $dbResult->update($data),
                'response' => array(
                    'icon' => 'success',
                    'title' => 'Tersimpan',
                    'message' => 'Data berhasil disimpan',
                ),
                'code' => 201
            );
        } catch (\Throwable $th) {
            $pendaftar = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }
        return response()->json($pendaftar, $pendaftar['code']);
    }

    public function deletePendaftar($id)
    {
        $dbcon = PendaftaranModel::whereId($id);
        $oldimg = $dbcon->value('path_img');
        try {
            if ($dbcon->first()) {
                File::delete(public_path($oldimg));
                $pendaftar = array(
                    'data' => $dbcon->delete(),
                    'response' => array(
                        'icon' => 'success',
                        'title' => 'Terhapus',
                        'message' => 'Data berhasil dihapus',
                    ),
                    'code' => 201
                );
            } else {
                $pendaftar = array(
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
            $pendaftar = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }
        return response()->json($pendaftar, $pendaftar['code']);
    }
}
