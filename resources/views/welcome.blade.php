@extends('layouts.master')
@section('title','Gerenciador Escolar')
@section('content')

<div class="conteudo">
    <div class="row d-flex justify-content-around">
        <div class="col-sm-3">
            <div class="card text-center">
            <img class="card-img-top" src="#" alt="">
                <div class="card-body">
                    <h4 class="card-title">Cadastro de Aluno</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('cadastro') }}" class="btn btn-primary stretched-link">Cadastrar</a>
                </div>
            </div>
        </div>
       
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="#" alt="">
                <div class="card-body">
                    <h4 class="card-title">Cadastro de Turma</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('cadastroTurma') }}" class="btn btn-primary stretched-link">Cadastrar</a>
                </div>
            </div>    
        </div>
    
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="#" alt="">
                <div class="card-body">
                    <h4 class="card-title">Cadastro de Professor</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('cadastroProfessores') }}" class="btn btn-primary stretched-link">Cadastrar</a>
                </div>
            </div>    
        </div>
    </div>
</div>

@endsection