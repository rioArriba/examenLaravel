<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscRequest extends FormRequest
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
            "title" => "required|unique:discs",
            "price" => "required",
            "year" => "required",
            "company_id" => "required",
        ];
    }

    public function messages(){
        return [
            "title.required" => "El titulo es requerido crack",
            "title.unique" => "Ese titulo ya existe",
            "price.required" => "El titulo es requerido crack",
            "year.required" => "El titulo es requerido crack",
            "company_id.required" => "El titulo es requerido crack"
        ];
    }
}
