<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class GuruRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required|max:255',
            'nip' => 'required|numeric',
            'jk' => 'required|max:255',
            'gol' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'status_nikah' => 'required|max:255',
            'path_img' => 'required',
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
