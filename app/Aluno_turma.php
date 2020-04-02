<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno_turma extends Model

{
    protected $fillable = [
        'aluno_id', 'turma_id'
    ];

    public function aluno()
    {
        return $this->belongsTo('App\Aluno', 'aluno_id');
    }
    public function turma()
    {
        return $this->belongsTo('App\Turma', 'turma_id');
    }
}
