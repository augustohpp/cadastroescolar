<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>PDF EXEMPLO</title>
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
                <h4>Secretária Municipal de Desenvolvimento Social</h4>
                <h4>Nome Sistema</h4>
        </div>
    </header>
    <div align="center">
        <h4 style="margin-top: 50px"><strong></strong><br /></h4>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Turma</th>
                <th>Vagas</th>
                <th>Professor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $cadastro)
           
            <tr>
                <td>{{$cadastro->id}}</td>
                <td>{{$cadastro->turma}}</td>
                <td>{{$cadastro->vagas}}</td>
                <td>{{$cadastro->professor->nome}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>