<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class WebPendaftaranRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nik_ayah' => 'required|numeric',
            'nama_ayah' => 'required|max:255',
            'jk_ayah' => 'required|max:255',
            'tgl_lahir_ayah' => 'required',
            'tempat_lahir_ayah' => 'required|max:255',
            'agama_ayah' => 'required|max:255',
            'pekerjaan_ayah' => 'required|max:255',
            'status_dalam_keluarga_ayah' => 'required|max:255',
            'alamat_ayah' => 'required|min:5',
            'penghasilan_ayah' => 'required',

            'nik_ibu' => 'required|numeric',
            'nama_ibu' => 'required|max:255',
            'jk_ibu' => 'required|max:255',
            'tgl_lahir_ibu' => 'required',
            'tempat_lahir_ibu' => 'required|max:255',
            'agama_ibu' => 'required|max:255',
            'pekerjaan_ibu' => 'required|max:255',
            'status_dalam_keluarga_ibu' => 'required|max:255',
            'alamat_ibu' => 'required|min:5',
            'penghasilan_ibu' => 'required',

            'nama_lengkap_siswa' => 'required|max:255',
            'nama_panggilan_siswa' => 'required|max:255',
            'jk_siswa' => 'required|max:255',
            'tempat_lahir_siswa' => 'required|max:255',
            'tgl_lahir_siswa' => 'required',
            'agama_siswa' => 'required|max:255',
            'alamat_siswa' => 'required|min:5',
            'anak_ke_siswa' => 'required|max:255',
            'jumlah_saudara_kandung_siswa' => 'required|max:255',
            'jumlah_saudara_tiri_siswa' => 'required|max:255',
            'jumlah_saudara_angkat_siswa' => 'required|max:255',
            'hobi_siswa' => 'required|max:255',
            'bidang_studi_digemari_siswa' => 'required|max:255',
            'olahraga_digemari_siswa' => 'required|max:255',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'response' => array(
                'icon' => 'error',
                'title' => 'Validasi Gagal',
                'message' => 'Data yang di input tidak tervalidasi',
            ),
            'errors' => array(
                'length' => count($validator->errors()),
                'data' => $validator->errors()
            ),
        ], 422));
    }
}
