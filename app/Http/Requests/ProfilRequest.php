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
            'nama_sekolah' => 'required|max:255',
            'alamat' => 'required|min:5',
            'desa' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'kabupaten' => 'required|max:255',
            'provinsi' => 'required|max:255',
            'telepon' => 'required|max:255',
            'nama_yayasan' => 'required|max:255',
            'status_sekolah' => 'required|max:255',
            'nama_kepala_sekolah' => 'required|integer',
            'visi' => 'required',
            'misi' => 'required',
        ];
    }
}
