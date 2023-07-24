<?php

namespace App\Http\Requests;

use App\Enums\EmployeeEnum;
use BenSampo\Enum\Rules\EnumValue;
use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:100',
            'position' => ['required', new EnumValue(EmployeeEnum::class, false)],
        ];
    }

    public function messages(): array
    {
        return [

            'name.required' => 'Поле name должно быть заполнено',
            'name.string' => 'Поле name должно быть строкой',
            'name.min' => 'Поле name должно быть более 3 символов',
            'name.max' => 'Поле name должно быть не более 100 символов',

            'position.required' => 'Поле position должно быть заполнено',

        ];
    }
}
