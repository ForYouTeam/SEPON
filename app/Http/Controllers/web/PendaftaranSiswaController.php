<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\WebPendaftaranRequest;
use App\Models\DetailSatuModel;
use App\Models\PendaftaranModel;
use App\Models\WaliMuridModel;
use Carbon\Carbon;
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
                ->with('pendaftar')
                ->get();

            foreach ($siswa['siswa'] as $key => $value) {
                $siswa['walimurid'] = array(
                    'ayah' => WaliMuridModel::whereId($value->id_ayah)
                        ->select(array('id', 'nama', 'pekerjaan'))
                        ->first(),
                    'ibu' => WaliMuridModel::whereId($value->id_ibu)
                        ->select(array('id', 'nama', 'pekerjaan'))
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
        // return response()->json($request->all(), 200);
        try {
            $years = Carbon::now()->format('Y');
            $file = $request->file('path_img_siswa');
            $filename = $request->nama_lengkap_siswa . '.' . $file->getClientOriginalExtension();
            $filepath = 'storage/pendaftar/';

            $waliarray = ['ayah', 'ibu'];
            foreach ($waliarray as $key) {
                $dbResult[$key] = WaliMuridModel::create([
                    'id_user' => Auth::user()->id,
                    'nik' => $request->input('nik_' . $key),
                    'nama' => $request->input('nama_' . $key),
                    'jk' => $request->input('jk_' . $key),
                    'tgl_lahir' => $request->input('tgl_lahir_' . $key),
                    'tempat_lahir' => $request->input('tempat_lahir_' . $key),
                    'agama' => $request->input('agama_' . $key),
                    'pekerjaan' => $request->input('pekerjaan_' . $key),
                    'status_dalam_keluarga' => $request->input('status_dalam_keluarga_' . $key),
                    'alamat' => $request->input('alamat_' . $key),
                    'penghasilan'  => $request->input('penghasilan_' . $key),
                ]);
            }
            $siswa = PendaftaranModel::create([
                'nama_lengkap' => $request->nama_lengkap_siswa,
                'nama_panggilan' => $request->nama_panggilan_siswa,
                'jk' => $request->jk_siswa,
                'tempat_lahir' => $request->tempat_lahir_siswa,
                'tgl_lahir' => $request->tgl_lahir_siswa,
                'agama' => $request->agama_siswa,
                'alamat' => $request->alamat_siswa,
                'tahun_ajaran' => $years,
                'path_img' => $filepath . '/' . $filename,
            ]);
            DetailSatuModel::create([
                'id_pendaftaran' => $siswa->id,
                'id_ayah' => $dbResult['ayah']['id'],
                'id_ibu' => $dbResult['ibu']['id'],
                'anak_ke' => $request->anak_ke_siswa,
                'jumlah_saudara_kandung' => $request->jumlah_saudara_kandung_siswa,
                'jumlah_saudara_tiri' => $request->jumlah_saudara_tiri_siswa,
                'jumlah_saudara_angkat' => $request->jumlah_saudara_angkat_siswa,
                'hobi' => $request->hobi_siswa,
                'bidang_studi_digemari' => $request->bidang_studi_digemari_siswa,
                'olahraga_digemari' => $request->olahraga_digemari_siswa,
            ]);

            $file->move($filepath, $filename);
            $result = array(
                'response' => array(
                    'icon' => 'success',
                    'title' => 'Tersimpan',
                    'message' => 'Data berhasil disimpan',
                ),
                'code' => 201
            );
        } catch (\Throwable $th) {
            $result = array(
                'data' => null,
                'response' => array(
                    'icon' => 'error',
                    'title' => 'Gagal',
                    'message' => $th->getMessage(),
                ),
                'code' => 500
            );
        }
        return response()->json($result, $result['code']);
    }
}
