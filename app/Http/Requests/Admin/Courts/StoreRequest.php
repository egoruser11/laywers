<?php

namespace App\Http\Requests\Admin\Courts;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'required|string|min:2',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Не указано название",
            'name.min' => 'Слишком короткое название',
        ];
    }
}
