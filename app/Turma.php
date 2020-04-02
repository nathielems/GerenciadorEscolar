<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = [
        'descricao', 'quantidade_vagas', 'nome_professor'
    ];

    public function alunoTurma()
    {
        return $this->hasMany('App\Aluno_turma');
    }
}
