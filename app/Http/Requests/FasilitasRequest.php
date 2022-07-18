<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FasilitasRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_ruangan' => 'required',
            'jumlah_ruangan' => 'required',
            'deskripsi' => 'required|min:15',
            'id_galeri' => 'required',
        ];
    }
}
