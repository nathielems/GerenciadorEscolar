<?php

namespace App\Http\Controllers;

use App\Turma;
use App\Professor;
use Illuminate\Http\Request;
use App\Http\Requests\ValidacaoTurma;

class TurmaController extends Controller
{
    public function index()
    {
        $turmas=Turma::all();
        return view('Turmas.tabelaTurma',['cadastrosTurma' => $turmas]);
    }

  
    public function create()
    {
        $professores=Professor::all();
        return view('Turmas.formTurma',['professores' => $professores]);
    }

    
    public function store(ValidacaoTurma $request)
    {

        $turma= new Turma();
        $turma->descricao = $request->input('descricao');
        $turma->quantidade_vagas =$request->input('quantidade_vagas');

        $professor= Professor::find($request->input('professor'));
        $turma->professor()->associate($professor)->save();

        return redirect()->route('listaTurma');

    }

    public function edit($id)
    {
        $professores=Professor::all();
        $turma = Turma::find($id);
        return view('Turmas.editTurma',['turma' => $turma, 'professores' => $professores]);
    }

    public function update(ValidacaoTurma $request, $id)
    {

        $turma= Turma::find($id);
        $turma->descricao = $request->get('descricao');
        $turma->quantidade_vagas =$request->get('quantidade_vagas');
        $professor= Professor::find($request->input('professor'));
        $turma->professor()->associate($professor)->save();
        $turma->save();

        return redirect()->route('listaTurma')->with('sucesso', 'Turma atualizada!');
    }

    public function destroy($id)
    {

        try {
            $turma = Turma::find($id);
                if(isset($turma)) {
                    $turma->delete();
                    return redirect()->route('listaTurma')->with('success','Turma apagada com sucesso!');
            }
         } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('listaTurma')->with('danger','Não foi possível apagar a Turma! Há registros dessa Turma');
         }

    }

    public function pdf(){
        $cadastrosTurma = Turma::with(['professor'])->get();
        $pdf = \PDF::loadView('Turmas.pdfTurma', compact('cadastrosTurma'));
        return $pdf->stream('turma.pdf');
    }
}