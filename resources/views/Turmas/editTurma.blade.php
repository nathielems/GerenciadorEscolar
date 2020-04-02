@extends('layouts.master')
@section('title','Gerenciador de Turmas')
@section('content')


<form action="{{route('atualizarTurma', $turma->id)}}" method="post" class="form-horizontal" id="formProduto">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Editar Turma</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatórios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="campo3">Professor: *</label>
                    <select  class="form-control"  name="professor" id="professor">
                        @foreach($professores as $professor)
                            <option value="{{$professor->id}}"  {{$turma->professor_id == $professor->id ? 'selected' : '' }}>{{$professor->nome}}</option>
                        @endforeach
                    </select>
                </div>

                {{--- Formulario Quantidade de Vagas ---}}

                <div class="form-group col-md-6">
                    <label for="quantidade_vagas" class="control-label">Quantidade de Vagas:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="quantidade_vagas" id="quantidade_vagas"
                            value="{{isset($turma->quantidade_vagas) ? $turma->quantidade_vagas : old('quantidade_vagas') }}"
                            placeholder="10" />
                    </div>
                </div>

                {{--- Formulario Descrição ---}}

                <div class="form-group col-md-12">
                    <label for="descricao" class="control-label">Descrição: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="descricao" name="descricao"
                            placeholder="Ex: Turma de X alunos, com x habilidades"
                            value="{{isset($turma->descricao) ? $turma->descricao : old('descricao') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a class="btn btn-secondary" href="#">Cancelar</a>
        </div>
    </div>
</form>

@endsection