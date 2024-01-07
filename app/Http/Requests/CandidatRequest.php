<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidatRequest extends FormRequest
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
            'cin' => 'required|string|max:10',
            'cne' => 'required|string|max:10',
            'address' => 'required|string|max:100',
            'num_apoge' => 'max:20',
            'ville' => 'required|max:10',
            'etablissement' => 'required|max:10',

        ];
    }
}
