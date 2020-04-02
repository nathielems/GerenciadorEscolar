<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'nome', 'sexo', 'data_nascimento', 'cidade', 'bairro', 'rua', 'numero', 'complemento'
    ];

    public function alunoTurma()
    {
        return $this->hasMany('App\Aluno_Turma');
    }
}
