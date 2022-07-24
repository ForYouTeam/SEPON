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
            'nik' => 'required|numeric',
            'nama' => 'required|max:255',
            'jk' => 'required|max:255',
            'tgl_lahir' => 'required',
            'tempat_lahir' => 'required|max:255',
            'agama' => 'required|max:255',
            'pekerjaan' => 'required|max:255',
            'status_dalam_keluarga' => 'required|max:255',
            'alamat' => 'required|min:5',
            'penghasilan' => 'required',
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
