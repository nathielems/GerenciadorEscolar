<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Http\Request;
use App\Http\Requests\ValidacaoProfessor;

class ProfessorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $professores=Professor::all();
        return view('professores.tabelaProf',['cadastrosProf' => $professores]);
    }

    public function create()
    {
            $professores=Professor::all();
            return view('professores.formProf',['professores' => $professores]);
    }

    public function store(ValidacaoProfessor $request)
    {

        $professor= new Professor();
        $professor->nome = $request->input('nome');
        $professor->sexo =$request->input('sexo');
        $professor->email =$request->input('email');
        $professor->data_nascimento =$request->input('data_nascimento');
        $professor->telefone = $request->input('telefone');
        $professor->rua = $request->input('rua');
        $professor->cidade =$request->input('cidade');
        $professor->bairro = $request->input('bairro');
        $professor->numero = $request->input('numero');
        $professor->complemento =$request->input('complemento');
        $professor->save();

        return redirect()->route('listaProfessores');

    }

    public function edit($id)
    {
	   $professor = Professor::find($id);
       return view('professores.editProf', compact('professor'));
	}

    public function update(ValidacaoProfessor $request, $id)
    {
        $professor= Professor::find($id);
        $professor->nome = $request->get('nome');
        $professor->sexo =$request->get('sexo');
        $professor->data_nascimento =$request->get('data_nascimento');
        $professor->telefone = $request->input('telefone');
        $professor->rua = $request->get('rua');
        $professor->cidade =$request->get('cidade');
        $professor->bairro = $request->get('bairro');
        $professor->numero = $request->get('numero');
        $professor->complemento =$request->get('complemento');
        $professor->save();

        return redirect()->route('listaProfessores')->with('sucesso', 'Professor atualizado!');
    }

    public function destroy($id)
    {
        $professor = Professor::find($id)->delete();

        return redirect()->route('listaProfessores');
    }
    public function pdf(){
        $cadastrosProf=Professor::all();
        $pdf = \PDF::loadView('professores.pdfProf', compact('cadastrosProf'));
        return $pdf->stream('exemplo.pdf');
}
}
