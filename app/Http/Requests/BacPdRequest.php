<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BacPdRequest extends FormRequest
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
            'diplome_id' => 'required|int|max:10',
            'specialite_id' => 'required|int|max:10',
            'moy_pa' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'moy_da' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'nb_etudiant_pa' => 'required|int',
            'nb_etudiant_da' => 'required|int',
            'classment_pa' => 'required|int',
            'classment_da' => 'required|int',
            'date_reussite_pa' => 'required|string',
            'date_reussite_da' => 'required|string',
        ];
    }
}
