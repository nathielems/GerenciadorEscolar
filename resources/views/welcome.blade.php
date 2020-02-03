@extends('layouts.master')
@section('title','EXEMPLO')
@section('content')

<div class="conteudo">
    <div class="card-columns d-flex justify-content-center">
        <div class="card text-center" style="width:300px">
            <img class="card-img-top" src="{{ URL::to('/imagens/cadastro.jfif') }}" alt="">
            <div class="card-body">
                <h4 class="card-title">Cadastro Exemplo</h4>
                <p class="card-text"></p>
                <a href="{{ route('cadastro') }}" class="btn btn-primary stretched-link">Link cadastro</a>
            </div>
        </div>
        <div class="card text-center" style="width:300px">
            <img class="card-img-top" src="{{ URL::to('/imagens/images.png') }}" alt="">
            <div class="card-body">
                <h4 class="card-title">Lista Exemplo</h4>
                <p class="card-text"></p>
                <a href="{{ route('lista') }}" class="btn btn-primary stretched-link">Link lista</a>
            </div>
        </div>
    </div>
</div>

@endsection