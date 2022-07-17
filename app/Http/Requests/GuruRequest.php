<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuruRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required',
            'nip' => 'required',
            'jk' => 'required',
            'gol' => 'required',
            'jabatan' => 'required',
            'status_nikah' => 'required',
            'path_img' => 'required',
        ];
    }
}
