<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class projectFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "nome" => 'required|string|max:20|min:3',
            "descrizione" => 'required|string|max:255|min:10',
            "data-progetto" => 'required|string',
        ];
    }
}
