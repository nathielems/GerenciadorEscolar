@extends('layouts.master')
@section('title','Gerenciador de Turmas')
@section('content')

<form action="{{route('atualizarUser', $user->id)}}" method="post" class="form-horizontal" id="formProduto">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Editar Usuário</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatórios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

            {{--- Formulario Nome ---}}
        
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="name" class="control-label">Nome: *</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" placeholder="Nome completo"
                        value="{{isset($user->name) ? $user->name : old('name') }}">
@if($errors->has('name'))
            <div class="invalid-feedback">
    {{$errors->first('name')}}
        </div>
@endif
    </div>

            {{--- Formulario Senha---}}

            <div class="form-group col-md-4">
                <label for="password" class="control-label">Senha: *</label>
                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password" placeholder="1/01/2015"
                        value="{{isset($user->password) ? $user->password : old('password') }}">
@if($errors->has('password'))
        <div class="invalid-feedback">
    {{$errors->first('password')}}
    </div>
@endif
</div>

            {{--  Formulário E-mail --}}

            <div class="form-group col-md-8">
                <label for="email" class="control-label">E-mail: *</label>
                <div class="input-group">
                    <input type="email" class="form-control" name="email" id="email"
                        value="{{isset($user->email) ? $user->email : old('email') }}"
                        placeholder="exemplo@exemplo.com" />
                </div>
            </div>

       {{--  Formulario Categoria --}}
            <div class="form-group col-md-4">
                <label for="campo3">Categoria: *</label>
                <select  class="form-control" name="categoria" id="categoria">
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}" {{ $user->categoria ==  $categoria->id? 'selected' : '' }} >{{$categoria->descricao}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-secondary" href="#">Cancelar</a>
        </div>
    </div> 
</form>

@endsection