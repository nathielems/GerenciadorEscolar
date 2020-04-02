<form action="{{route('salvarAluno')}}" method="post" class="form-horizontal" id="formProduto">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Cadastrar Aluno</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatórios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

            {{--- Formulario Nome ---}}
        
        <div class="form-row">
            <div class="form-group col-md-7">
                <label for="nome" class="control-label">Nome: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo"
                        value="{{isset($aluno->nome) ? $aluno->nome : old('nome') }}">
                </div>
            </div>
            
            {{--- Formulario data de nascimento---}}

            <div class="form-group col-md-2">
                <label for="dataNascimento" class="control-label">Data de Nascimento: *</label>
                <div class="input-group">
                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="1/01/2015"
                        value="{{isset($aluno->dataNascimento) ? $aluno->dataNascimento : old('dataNascimento') }}">
                </div>
            </div>

            {{--- Formulario Sexo ---}}

            <div class="form-group col-md-3">
			    <label for="campo3">Sexo: *</label>
			    <p>
				    <input type="radio" name="sexo" required value="1">Masculino</input>
				    <input type="radio" name="sexo" required value="2">Feminino</input>
				    <input type="radio" name="sexo" required value="3">Outro</input>
			    </p>
            </div>
            

            {{--- Formulario Endereco  ---}}
            <h4 class="col-12 modal-title text-row">Endereço:</h5>
            <div class="form-group col-md-8">
                <label for="rua" class="control-label">Rua: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="rua" name="rua"
                        placeholder="Ex: Av. Dom João Becker"
                        value="{{isset($aluno->rua) ? $aluno->rua : old('rua') }}">
                </div>
            </div>

            {{--- Formulario Cidade  ---}}

            <div class="form-group col-md-4">
                <label for="cidade" class="control-label">Cidade: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="cidade" name="cidade"
                        placeholder="São Leopoldo"
                        value="{{isset($aluno->cidade) ? $aluno->cidade : old('cidade') }}">
                </div>
            </div>

            {{--- Formulario Bairro  ---}}

            <div class="form-group col-md-5">
                <label for="bairro" class="control-label">Bairro: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="bairro" name="bairro"
                        placeholder="Centro"
                        value="{{isset($aluno->bairro) ? $aluno->bairro : old('bairro') }}">
                </div>
            </div>


            {{--- Formulario número  ---}}

            <div class="form-group col-md-1">
                <label for="numero" class="control-label">Número: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="numero" name="numero"
                        placeholder="111"
                        value="{{isset($aluno->numero) ? $aluno->numero : old('numero') }}">
                </div>
            </div>

            {{--- Formulario complemento  ---}}

            <div class="form-group col-md-6">
                <label for="complemento" class="control-label">Complemento: </label>
                <div class="input-group">
                    <input type="text" class="form-control" id="complemento" name="complemento"
                        placeholder="Ao lado da loja tal"
                        value="{{isset($aluno->complemento) ? $aluno->complemento : old('complemento') }}">
                </div>
            </div>
        </div>

<!--             {{--- Formulario Cidade Cras ---}}


            {{--- Formulario Telefone Cras ---}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Telefone: *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" name="tel" id="tel"
                            value="{{isset($cras->telefone) ? $cras->telefone : old('tel') }}"
                            placeholder="(00)0000-0000" />
                    </div>
                </div>

                {{--- Formulario Telefone2 Cras ---}}

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Telefone:</label>
                    <div class="input-group">
                        <input type="text" class="form-control phone_with_ddd" name="tel2" id="tel2"
                            value="{{isset($cras->telefone2) ? $cras->telefone2 : old('tel2') }}"
                            placeholder="(00)0000-0000" />
                    </div>
                </div>
            </div>
            {{--- Formulario E-mail Cras ---}}

            <div class="form-group">
                <label for="email" class="control-label">E-mail: *</label>
                <div class="input-group">
                    <input type="email" class="form-control" name="email" id="email"
                        value="{{isset($cras->email) ? $cras->email : old('email') }}"
                        placeholder="exemplo@exemplo.com" />
                </div>
            </div> -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-secondary" href="#">Cancelar</a>
        </div>
    </div>
</form>