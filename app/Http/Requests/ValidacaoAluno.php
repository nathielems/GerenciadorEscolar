<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoAluno extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|min:5|max:120',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'telefone' => 'required',
            'turma' => 'required',
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
            'nome.max' => 'É necessário no máximo 120 letras',
            'nome.alpha' => 'Apenas letras alfabéticas',
            'data_nascimento.required' => 'O campo data é necessário',
            'sexo.required' => 'O campo sexo é necessário',
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
