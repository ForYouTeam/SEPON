<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetailSatuRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_pendaftaran' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara_kandung' => 'required',
            'jumlah_saudara_tiri' => 'required',
            'jumlah_saudara_angkat' => 'required',
            'alamat' => 'required|min:5',
            'hobi' => 'required',
            'bidang_studi_digemari' => 'required',
            'olahraga_digemari' => 'required',
        ];
    }
}
