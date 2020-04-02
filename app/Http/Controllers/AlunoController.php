<?php

namespace App\Http\Controllers;

use App\Turma;
use App\Aluno;
use Illuminate\Http\Request;
use App\Http\Requests\ValidacaoAluno;

class AlunoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cadastros=Aluno::all();
        return view('Alunos.tabela',['cadastros' => $cadastros]);
    }

    public function create()
    {
        $turmas=Turma::all();
        return view('Alunos.form',['turmas' => $turmas]);
    }

    public function store(ValidacaoAluno $request)
    {
        $aluno= new Aluno();
        $aluno->nome = $request->input('nome');
        $aluno->sexo =$request->input('sexo');
        $aluno->data_nascimento =$request->input('data_nascimento');
        $aluno->telefone = $request->input('telefone');
        $aluno->rua = $request->input('rua');
        $aluno->cidade =$request->input('cidade');
        $aluno->bairro = $request->input('bairro');
        $aluno->numero = $request->input('numero');
        $aluno->complemento =$request->input('complemento');

        $aluno->save();

        $aluno->turmas()->attach($request->input('turma'));
        
        return redirect()->route('lista');

    }

    public function edit($id)
    {
        $turmas=Turma::all();
        $aluno = Aluno::find($id);
        $aluno->turmas=$aluno->turmas()->allRelatedIds();

        return view('Alunos.edit', ['turmas' => $turmas,'aluno' => $aluno]);
	}

    public function update(ValidacaoAluno $request, $id)
    {
        $aluno= Aluno::find($id);
        $aluno->nome = $request->get('nome');
        $aluno->sexo =$request->get('sexo');
        $aluno->data_nascimento =$request->get('data_nascimento');
        $aluno->telefone = $request->input('telefone');
        $aluno->rua = $request->get('rua');
        $aluno->cidade =$request->get('cidade');
        $aluno->bairro = $request->get('bairro');
        $aluno->numero = $request->get('numero');
        $aluno->complemento =$request->get('complemento');
        $aluno->save();

        $aluno->turmas()->detach($aluno->turmas()->allRelatedIds());

        $aluno->turmas()->attach($request->input('turmas'));

        return redirect()->route('lista')->with('sucesso', 'Aluno atualizado!');
    }

    public function destroy($id)
    {
        $aluno = Aluno::find($id)->delete();

        return redirect()->route('lista');
    }

    public function pdf(){
            $cadastros=Aluno::all();
            $pdf = \PDF::loadView('Alunos.pdf', compact('cadastros'));
            return $pdf->stream('exemplo.pdf');
    }
}
 