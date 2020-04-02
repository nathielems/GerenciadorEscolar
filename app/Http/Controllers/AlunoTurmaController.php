<?php

namespace App\Http\Controllers;

use App\Turma;
use App\Aluno;
use App\Aluno_turma;
use Illuminate\Http\Request;

class AlunoTurmaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cadastros=Aluno_turma::all();
        return view('Alunos.tabela',['cadastros' => $cadastros]);
    }

    public function pdf(){
        $alunosTurma = Aluno_turma::with(['aluno', 'turma.professor'])->get();
        
        $pdf = \PDF::loadView('Turmas.pdfAlunoTurma', compact('alunosTurma'));
        return $pdf->stream('alunosTurma.pdf');
    }
    
}
 
