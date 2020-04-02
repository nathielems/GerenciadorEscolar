<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Aluno extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = [
        'nome', 'sexo', 'telefone', 'data_nascimento', 'cidade', 'bairro', 'rua', 'numero', 'complemento'
    ];

    public function turmas()
    {
        return $this->belongsToMany('App\Turma', 'aluno_turmas');
    }
}
