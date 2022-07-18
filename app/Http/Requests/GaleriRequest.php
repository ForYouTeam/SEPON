<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GaleriRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'path_file' => 'required',
            'deskripsi' => 'required|min:15',
            'jenis' => 'required',
        ];
    }
}
