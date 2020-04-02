<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoTurma extends FormRequest
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
            'descricao' => 'required|min:5|max:50',
            'quantidade_vagas' => 'required|numeric',
            'professor' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'descricao.required' => 'A descrição é necessaria',
            'descricao.min' => 'É necessário no mínimo 5 letras',
            'descricao.max' => 'É necessário no maximo 50 letras',
            'quantidade_vagas.required' => 'O campo quantidade de vagas é necessário',
            'quantidade_vagas.numeric' => 'Apenas números',
            'professor.required' => 'É necessário selecionar um professor'
        ];
    }
}
