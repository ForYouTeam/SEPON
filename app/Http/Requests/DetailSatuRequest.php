<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class DetailSatuRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_pendaftaran' => 'required|integer',
            'anak_ke' => 'required|max:255',
            'jumlah_saudara_kandung' => 'required|max:255',
            'jumlah_saudara_tiri' => 'required|max:255',
            'jumlah_saudara_angkat' => 'required|max:255',
            'alamat' => 'required|min:5',
            'hobi' => 'required|max:255',
            'bidang_studi_digemari' => 'required|max:255',
            'olahraga_digemari' => 'required|max:255',
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
