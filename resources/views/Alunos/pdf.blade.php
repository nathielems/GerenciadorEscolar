<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>PDF - Alunos</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css"
        rel="stylesheet" />
</head>
<style>
    .table-condensed {
        font-size: 13px;
    }

    div {
        margin-top: 10px;
    }
</style>

<body>
    <header>
        <div align="center">
            <img width="100" src="{{public_path('imagens/logo.png')}}"
                style="width:100px;height:120px;float: left;z-index:10000" />
            <center>
                <h4 style="margin-top: 30px">Prefeitura Municipal de São Leopoldo<br /></h4>
                <h4>Secretaria Municipal de Desenvolvimento Social</h4>
                <h4>Gerenciador Escolar</h4>
        </div>
    </header>
    <div align="center">
        <h4 style="margin-top: 50px"><strong></strong><br /></h4>
    </div>
    <table class="table">
        <thead align="center">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Data de Nascimento</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Rua</th>
                <th>Número</th>
                <th>Complemento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cadastros as $cadastro)
            <tr>
                <td>{{$cadastro->id}}</td>
                <td>{{$cadastro->nome}}</td>
                <td>{{$cadastro->sexo == 1 ? 'Masculino' :  $cadastro->sexo == 2 ? 'Feminino' : 'Outro' }}</td>
                <td>{{$cadastro->data_nascimento}}</td>
                <td>{{$cadastro->cidade}}</td>
                <td>{{$cadastro->bairro}}</td>
                <td>{{$cadastro->rua}}</td>
                <td>{{$cadastro->numero}}</td>
                <td>{{$cadastro->complemento}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>