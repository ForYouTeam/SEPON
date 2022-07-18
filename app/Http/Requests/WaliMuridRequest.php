<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WaliMuridRequest extends FormRequest
{ 
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_user' => 'required',
            'nik' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tgl_lahir' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'status_dalam_keluarga' => 'required',
            'alamat' => 'required',
            'penghasilan' => 'required',
            'path_img' => 'required',
        ];
    }
}
