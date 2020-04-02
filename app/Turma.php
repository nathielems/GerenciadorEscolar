<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Turma extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = [
        'descricao', 'quantidade_vagas'
    ];

    public function alunos()
    {
        return $this->belongsToMany('App\Aluno', 'aluno_turmas');
    }
    
    public function professor(){
        return $this->belongsTo('App\Professor'); 
    }
}
