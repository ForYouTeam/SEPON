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
            'nama' => 'required|max:255',
            'nip' => 'required|integer',
            'jk' => 'required|max:255',
            'gol' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'status_nikah' => 'required|max:255',
            'path_img' => 'required',
        ];
    }
}
