<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storePostRequest extends FormRequest
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
            "title"=>'required|string|min:3',
            'body'=>'required'
        ];
    }

    public function attributes()
    {
        return [
          "title"=>'titulo',
           "body"=>'contenido',
        ];
    }
    public function messages()
    {
        return [
            "title.required"=>"El campo :attribute es requerido",
            "title.min"=>"El campo :attribute  debe ser mayor a :min",
        ];
    }
}
