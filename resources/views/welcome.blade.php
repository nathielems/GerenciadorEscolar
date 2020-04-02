@extends('layouts.master')
@section('title','Gerenciador de Turmas')
@section('content')

<div class="conteudo">
    <div class="row d-flex justify-content-around">
        <div class="col-sm-4">
            <div class="card text-center">
            <img class="card-img-top" src="{{ URL::to('/imagens/images.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Cadastro de Aluno</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('cadastro') }}" class="btn btn-primary stretched-link">Cadastrar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('/imagens/images.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Lista de Alunos</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('lista') }}" class="btn btn-primary stretched-link">Acessar Lista</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('/imagens/images.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Gerar PDF - lista de alunos</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('pdf') }}" class="btn btn-primary stretched-link">Gerar PDF</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('/imagens/images.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Cadastro de Turma</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('cadastroTurma') }}" class="btn btn-primary stretched-link">Cadastrar</a>
                </div>
            </div>    
        </div>
        <div class="col-sm-4">        
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('/imagens/images.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Lista de Turmas</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('listaTurma') }}" class="btn btn-primary stretched-link">Acessar Lista</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('/imagens/images.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Gerar PDF - Lista de Turmas</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('pdfTurma') }}" class="btn btn-primary stretched-link">Gerar PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection