<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_sekolah' => 'required',
            'alamat' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'telepon' => 'required',
            'nama_yayasan' => 'required',
            'status_sekolah' => 'required',
            'nama_kepala_sekolah' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ];
    }
}
