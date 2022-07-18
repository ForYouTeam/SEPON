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
            'id_pendaftaran' => 'required|integer',
            'id_ibu' => 'required|integer',
            'id_ayah' => 'required|integer',
            'id_wali' => 'required|integer',
        ];
    }
}
