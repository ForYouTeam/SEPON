<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendaftaranRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
        ];
    }
}
