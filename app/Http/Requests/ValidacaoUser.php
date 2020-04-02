<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoUser extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:120',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'categoria' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'O nome é requerido',
            'name.min' => 'É necessário no mínico 5 letras',
            'name.max' => 'É necessário no máximo 120 letras',
            'name.alpha' => 'Apenas letras alfabéticas',
            'email.required' => 'O campo e-mail é necessário',
            'email.unique' => 'O e-mail já consta em nossa base de dados',
            'password.required' => 'O campo senha é necessário',
            'categoria.required' => 'O campo categoria é necessário',
        ];
    }
}
