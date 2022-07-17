<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetailDuaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_pendaftaran' => 'required',
            'id_ibu' => 'required',
            'id_ayah' => 'required',
            'id_wali' => 'required',
        ];
    }
}
