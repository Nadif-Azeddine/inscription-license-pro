<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BacRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'option' => 'required|int|max:10',
            'moy_gen' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'date_obt' => 'required|string|max:5',
            'mention' => 'required|string|max:20',
        ];
    }
}
