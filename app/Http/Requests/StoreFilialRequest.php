<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFilialRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:100',
        ];
    }

    public function messages(): array
    {
        return [

            'name.required' => 'Поле name должно быть заполнено',
            'name.string' => 'Поле name должно быть строкой',
            'name.min' => 'Поле name должно быть более 3 символов',
            'name.max' => 'Поле name должно быть не более 100 символов',

        ];
    }
}
