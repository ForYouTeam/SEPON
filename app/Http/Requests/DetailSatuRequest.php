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
            'id_pendaftaran' => 'required|integer',
            'anak_ke' => 'required|max:255',
            'jumlah_saudara_kandung' => 'required|max:255',
            'jumlah_saudara_tiri' => 'required|max:255',
            'jumlah_saudara_angkat' => 'required|max:255',
            'alamat' => 'required|min:5',
            'hobi' => 'required|max:255',
            'bidang_studi_digemari' => 'required|max:255',
            'olahraga_digemari' => 'required|max:255',
        ];
    }
}
