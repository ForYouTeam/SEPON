<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required|min:2|max:255',
            'email' => 'required|email|min:2|max:255|unique:users,email',
            'password' => 'required|min:4|max:255|confirmed'
        ];
    }
}
