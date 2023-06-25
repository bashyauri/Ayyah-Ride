<?php

namespace App\Http\Requests\Driver;

use Illuminate\Foundation\Http\FormRequest;

class StoreCabRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'model' => ['required', 'string'],
            'brand' => ['required', 'string'],
            'vin' => ['required', 'string'],
            'registration_no' => ['required', 'string'],
            'chassis_number' => ['required', 'string'],
            'no_of_seats' => ['required','digits_between:1,2'],
        ];
    }
}