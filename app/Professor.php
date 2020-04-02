<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Professor extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public $table = 'professores';
    
    protected $fillable = [
        'nome','data_nascimento', 'telefone', 'sexo', 'email','cidade', 'bairro', 'rua', 'numero', 'complemento' 
    ];
    
    public function turmas(){
        return $this->hasMany('App\Turma'); 
    }
}


