@extends('layouts.master')
@section('title','Gerenciador de Turmas')
@section('content')

<form action="{{route('Alunos.salvarAluno')}}" method="post" class="form-horizontal" id="formAluno">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Matricular Aluno</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatórios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

            {{--- Formulario Nome ---}}
        
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="nome" class="control-label">Nome: *</label>
                    <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" id="nome" name="nome" placeholder="Nome completo"
                        value="{{isset($aluno->nome) ? $aluno->nome : old('nome') }}">
                        @if($errors->has('nome'))
                            <div class="invalid-feedback">
                                {{$errors->first('nome')}}
                            </div>
                        @endif
            </div>
            
            {{--- Formulario data de nascimento---}}

            <div class="form-group col-md-4">
                <label for="data_nascimento" class="control-label">Data de Nascimento: *</label>

                    <input type="date" class="form-control {{ $errors->has('data_nascimento') ? 'is-invalid' : '' }}" id="data_nascimento" name="data_nascimento" placeholder="1/01/2015"
                        value="{{isset($aluno->data_nascimento) ? $aluno->data_nascimento : old('data_nascimento') }}">
            @if($errors->has('data_nascimento'))
                        <div class="invalid-feedback">
                {{$errors->first('data_nascimento')}}
                        </div>
            @endif
                    </div>
            {{--- Formulario Sexo ---}}

            <div class="form-group col-md-4">
			    <label for="sexo" class="required">Sexo: *</label>
			    <p >
				    <input type="radio" name="sexo" required value="1" {{ old('sexo') == 1 ? 'checked' : '' }}>Masculino</input>
				    <input type="radio" name="sexo" required value="2" {{ old('sexo') == 2 ? 'checked' : '' }}>Feminino</input>
				    <input type="radio" name="sexo" required value="3" {{ old('sexo') == 3 ? 'checked' : '' }}>Outro</input>
                </p>
            </div>     

             {{-- Formulário telefone --}}

            <div class="form-group col-md-4">
                <label for="telefone" class="control-label">Telefone: *</label>
                <div class="input-group ">
                    <input type="text" class="form-control phone_with_ddd {{ $errors->has('telefone') ? 'is-invalid' : '' }}" name="telefone" id="telefone"
                        value="{{isset($aluno->telefone) ? $aluno->telefone : old('telefone') }}"
                        placeholder="(00)0000-0000" />
                        @if($errors->has('telefone'))
                        <div class="invalid-feedback">
                            {{$errors->first('telefone')}}
                        </div>
                    @endif
                </div>
            </div>
            
            {{--Formulário turma --}}
            
            <div class="form-group col-md-4">
			    <label for="turma">Turma: *</label>
                <select  class="form-control {{ $errors->has('turma') ? 'is-invalid' : '' }}" name="turma" id="turma">
                    <option value="">Selecione uma turma</option>
                    @foreach($turmas as $turma)
                        <option value="{{$turma->id}}">{{$turma->descricao}}</option>
                    @endforeach
                </select>
            </div>

            {{--- Formulario Endereco  ---}}
            <h4 class="col-12 modal-title text-row">Endereço:</h5>
            <div class="form-group col-md-8">
                <label for="rua" class="control-label">Rua: *</label>
                    <input type="text" class="form-control {{ $errors->has('rua') ? 'is-invalid' : '' }}" id="rua" name="rua"
                        placeholder="Ex: Av. Dom João Becker"
                        value="{{isset($aluno->rua) ? $aluno->rua : old('rua') }}">
                    @if($errors->has('rua'))
                        <div class="invalid-feedback">
                            {{$errors->first('rua')}}
                        </div>
                    @endif
            </div>


            {{--- Formulario Cidade  ---}}

            <div class="form-group col-md-4">
                <label for="cidade" class="control-label">Cidade: *</label>
                <div class="input-group">
                    <input type="text" class="form-control {{ $errors->has('cidade') ? 'is-invalid' : '' }}" id="cidade" name="cidade"
                        placeholder="São Leopoldo"
                        value="{{isset($aluno->cidade) ? $aluno->cidade : old('cidade') }}">
                        @if($errors->has('cidade'))
                        <div class="invalid-feedback">
                            {{$errors->first('cidade')}}
                        </div>
                    @endif 
                </div>
            </div>

            {{--- Formulario Bairro  ---}}

            <div class="form-group col-md-5">
                <label for="bairro" class="control-label">Bairro: *</label>
                <div class="input-group">
                    <input type="text" class="form-control {{ $errors->has('bairro') ? 'is-invalid' : '' }}" id="bairro" name="bairro"
                        placeholder="Centro"
                        value="{{isset($aluno->bairro) ? $aluno->bairro : old('bairro') }}">
                        @if($errors->has('bairro'))
                        <div class="invalid-feedback">
                            {{$errors->first('bairro')}}
                        </div>
                    @endif 
                </div>
            </div>


            {{--- Formulario número  ---}}

            <div class="form-group col-md-1">
                <label for="numero" class="control-label">Número: *</label>
                <div class="input-group">
                    <input type="text" class="form-control {{ $errors->has('numero') ? 'is-invalid' : '' }}" id="numero" name="numero"
                        placeholder="111"
                        value="{{isset($aluno->numero) ? $aluno->numero : old('numero') }}">
                        @if($errors->has('numero'))
                        <div class="invalid-feedback">
                            {{$errors->first('numero')}}
                        </div>
                    @endif
                </div>
            </div>

            {{--- Formulario complemento  ---}}

            <div class="form-group col-md-6">
                <label for="complemento" class="control-label">Complemento: </label>
                    <input type="text" class="form-control {{ $errors->has('complemento') ? 'is-invalid' : '' }}" id="complemento" name="complemento"
                        placeholder="Ao lado da loja tal"
                        value="{{isset($aluno->complemento) ? $aluno->complemento : old('complemento') }}">
                        @if($errors->has('complemento'))
                        <div class="invalid-feedback">
                            {{$errors->first('complemento')}}
                        </div>
                    @endif
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
{!! JsValidator::formRequest('App\Http\Requests\ValidacaoAluno'); !!}

@endsection

