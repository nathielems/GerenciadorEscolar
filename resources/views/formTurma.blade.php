<form action="{{route('salvarTurma')}}" method="post" class="form-horizontal" id="formProduto">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Cadastrar Turma</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatórios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

            {{--- Formulario Turma ---}}

<!--             <div class="form-group">
                <label for="nome" class="control-label">Nome da Turma: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo"
                        value="{{isset($cras->nome) ? $cras->nome : old('nome') }}">
                </div>
            </div> -->

            {{--- Formulario nome do Professor ---}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Nome do professor(a): *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" name="nomeProfessor" id="prof"
                            value="{{isset($cras->nomeProfessor) ? $cras->nomeProfessor : old('prof') }}"
                            placeholder="Nome completo do(a) professor(a)" />
                    </div>
                </div>

                {{--- Formulario Quantidade de Vagas Cras ---}}

                <div class="form-group col-md-6">
                    <label for="vagas" class="control-label">Quantidade de Vagas:</label>
                    <div class="input-group">
                        <input type="text" class="form-control phone_with_ddd" name="vagas" id="vagas"
                            value="{{isset($cras->quantidadeVagas) ? $cras->quantidadeVagas : old('vagas') }}"
                            placeholder="10" />
                    </div>
                </div>

                {{--- Formulario Descrição Cras ---}}

                <div class="form-group col-md-12">
                    <label for="descricao" class="control-label">Descrição: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="descricao" name="descricao"
                            placeholder="Ex: Turma de X alunos, com x habilidades"
                            value="{{isset($cras->descricao) ? $cras->descricao : old('descricao') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-secondary" href="#">Cancelar</a>
        </div>
    </div>
</form>