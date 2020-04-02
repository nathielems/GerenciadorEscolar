@extends('layouts.master')
@section('title','Gerenciador de Turmas')
@section('content')

<form action="{{route('salvarTurma')}}" method="post" class="form-horizontal" id="formProduto">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Cadastrar Turma</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatórios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">


      {{--       Formulário professor --}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="campo3">Professor: *</label>
                    <select  class="form-control"  name="professor" id="professor">
                        <option value="">Selecione um professor</option>
                        @foreach($professores as $professor)
                            <option value="{{$professor->id}}">{{$professor->nome}}</option>
                        @endforeach
                    </select>
                </div>
                {{--- Formulario Quantidade de Vagas ---}}

                <div class="form-group col-md-6">
                    <label for="quantidade_vagas" class="control-label">Quantidade de Vagas:</label>
                        <input type="text" class="form-control {{ $errors->has('quantidade_vagas') ? 'is-invalid' : '' }}" name="quantidade_vagas" id="quantidade_vagas"
                            value="{{isset($turma->quantidade_vagas) ? $turma->quantidade_vagas : old('quantidade_vagas') }}"
                            placeholder="10" >
                        @if($errors->has('quantidade_vagas'))
                            <div class="invalid-feedback">
                            {{$errors->first('quantidade_vagas')}}
                            </div>
                        @endif
                </div>

                {{--- Formulario Descrição ---}}

                <div class="form-group col-md-12">
                    <label for="descricao" class="control-label {{ $errors->has('descricao') ? 'is-invalid' : '' }}">Descrição: *</label>
                        <input type="text" class="form-control" id="descricao" name="descricao"
                            value="{{isset($turma->descricao) ? $turma->descricao : old('descricao') }}" 
                            placeholder="Ex: Turma de X alunos, com x habilidades" >
                        @if($errors->has('descricao'))
                            <div class="invalid-feedback">
                            {{$errors->first('descricao')}}
                            </div>
                        @endif
                </div>
                
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-secondary" href="#">Cancelar</a>
        </div>
    </div>
</form>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\ValidacaoTurma'); !!}

@endsection