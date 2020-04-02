<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastros=Aluno::all();
        return view('tabela',['cadastros' => $cadastros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!empty($_POST['aluno'])) {

            $aluno = $_POST['aluno'];
    
            $aluno->save('aluno', $aluno);
            header('cadastro');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $aluno= new Aluno();
        $aluno->nome = $request->input('nome');
        $aluno->sexo =$request->input('sexo');
        $aluno->data_nascimento =$request->input('data_nascimento');
        $aluno->rua = $request->input('rua');
        $aluno->cidade =$request->input('cidade');
        $aluno->bairro = $request->input('bairro');
        $aluno->numero = $request->input('numero');
        $aluno->complemento =$request->input('complemento');
        $aluno->save();

        return redirect()->route('lista');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	   $aluno = Aluno::find($id);
       return view('form', compact('aluno'));
	}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aluno= Aluno::find($id);
        $aluno->nome = $request->get('nome');
        $aluno->sexo =$request->get('sexo');
        $aluno->data_nascimento =$request->get('data_nascimento');
        $aluno->rua = $request->get('rua');
        $aluno->cidade =$request->get('cidade');
        $aluno->bairro = $request->get('bairro');
        $aluno->numero = $request->get('numero');
        $aluno->complemento =$request->get('complemento');
        $aluno->save();

        return redirect()->route('lista')->with('sucesso', 'Aluno atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
