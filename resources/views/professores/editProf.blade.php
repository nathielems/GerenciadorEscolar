@extends('layouts.master')
@section('title','Gerenciador Escolar')
@section('content')

<form action="{{route('atualizarProfessor', $professor->id)}}" method="post" class="form-horizontal" id="formProduto">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Editar Professor</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatórios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

            {{--- Formulario Nome ---}}
        
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="nome" class="control-label">Nome: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo"
                        value="{{isset($professor->nome) ? $professor->nome : old('nome') }}">
                </div>
            </div>
            
            {{--- Formulario data de nascimento---}}

            <div class="form-group col-md-4">
                <label for="data_nascimento" class="control-label">Data de Nascimento: *</label>
                <div class="input-group">
                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="1/01/2015"
                        value="{{isset($professor->data_nascimento) ? $professor->data_nascimento : old('data_nascimento') }}">
                </div>
            </div>

            {{--- Formulario Sexo ---}}

            <div class="form-group col-md-3">
			    <label for="campo3">Sexo: *</label>
                <p>
				    <input type="radio" name="sexo" required value="1" {{ $professor->sexo == 1 ? 'checked' : '' }}>Masculino</input>
				    <input type="radio" name="sexo" required value="2" {{ $professor->sexo == 2 ? 'checked' : '' }}>Feminino</input>
				    <input type="radio" name="sexo" required value="3" {{ $professor->sexo == 3 ? 'checked' : '' }}>Outro</input>
			    </p>
            </div>

            {{-- Formulário telefone --}}

            <div class="form-group col-md-4">
                <label for="telefone" class="control-label">Telefone: *</label>
                <div class="input-group ">
                    <input type="text" class="form-control phone_with_ddd" name="telefone" id="telefone"
                        value="{{isset($professor->telefone) ? $professor->telefone : old('telefone') }}"
                        placeholder="(00)0000-0000" />
                </div>
            </div>

     {{--        Formulário E-mail --}}

            <div class="form-group col-md-5">
                <label for="email" class="control-label">E-mail: *</label>
                <div class="input-group">
                    <input type="email" class="form-control" name="email" id="email"
                        value="{{isset($professor->email) ? $professor->email : old('email') }}"
                        placeholder="exemplo@exemplo.com" />
                </div>
            </div>
            

            {{--- Formulario Endereco  ---}}
            <h4 class="col-12 modal-title text-row">Endereço:</h5>
            <div class="form-group col-md-8">
                <label for="rua" class="control-label">Rua: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="rua" name="rua"
                        placeholder="Ex: Av. Dom João Becker"
                        value="{{isset($professor->rua) ? $professor->rua : old('rua') }}">
                </div>
            </div>

            {{--- Formulario Cidade  ---}}

            <div class="form-group col-md-4">
                <label for="cidade" class="control-label">Cidade: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="cidade" name="cidade"
                        placeholder="São Leopoldo"
                        value="{{isset($professor->cidade) ? $professor->cidade : old('cidade') }}">
                </div>
            </div>

            {{--- Formulario Bairro  ---}}

            <div class="form-group col-md-5">
                <label for="bairro" class="control-label">Bairro: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="bairro" name="bairro"
                        placeholder="Centro"
                        value="{{isset($professor->bairro) ? $professor->bairro : old('bairro') }}">
                </div>
            </div>


            {{--- Formulario número  ---}}

            <div class="form-group col-md-1">
                <label for="numero" class="control-label">Número: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="numero" name="numero"
                        placeholder="111"
                        value="{{isset($professor->numero) ? $professor->numero : old('numero') }}">
                </div>
            </div>

            {{--- Formulario complemento  ---}}

            <div class="form-group col-md-6">
                <label for="complemento" class="control-label">Complemento: </label>
                <div class="input-group">
                    <input type="text" class="form-control" id="complemento" name="complemento"
                        placeholder="Ao lado da loja tal"
                        value="{{isset($professor->complemento) ? $professor->complemento : old('complemento') }}">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-secondary" href="#">Cancelar</a>
        </div>
    </div>
</form>

@endsection
