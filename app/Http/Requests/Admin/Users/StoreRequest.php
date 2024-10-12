<?php

namespace App\Http\Requests\Admin\Users;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'required|string',
            'login' => 'required|string|min:4',
            'password' => 'required|string|min:6',
            'role' => 'required|string',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Не указано ФИО",

        ];
    }
}
