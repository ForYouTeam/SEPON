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
            'id_user' => 'required|integer',
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
            'path_img' => 'required',
        ];
    }
}
