<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoProfessor extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|min:5|max:120',
            'data_nascimento' => 'required|date',
            'sexo' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'rua' => 'required|min:5',
            'cidade' => 'required|min:5',
            'bairro' => 'required|min:5',
            'numero' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'O nome é requerido',
            'nome.min' => 'É necessário no mínimo 5 letras',
            'nome.max' => 'É necessário no maáimo 120 letras',
            'nome.alpha' => 'Apenas letras alfabeticas',
            'data_nascimento.required' => 'O campo data é necessário',
            'sexo.required' => 'O campo sexo é necessário',
            'email.required' => 'O campo e-mail é necessário',
            'telefone.required' => 'O campo telefone é necessário',
            'rua.required' => 'O campo rua é necessário',
            'rua.min' => 'É necessário no mínimo 5 letras',
            'cidade.required' => 'O campo cidade é necessário',
            'cidade.min' => 'É necessário no mínimo 5 letras',
            'bairro.required' => 'O campo bairro é necessário',
            'bairro.min' => 'É necessário no mínimo 5 letras',
            'numero.required' => 'É necessário o número',
        ];
    }
}
