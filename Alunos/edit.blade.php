<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #040404;
            background-color: #a0fff0;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }



        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
        }
    </style>
</head>
<body>
<form action="{{route('alunos.update', [$alunos->id])}}" method="post">
    {!!csrf_field() !!}
    Nome<div><input type="text" name="nome" value="{{$alunos->nome}}"/></div><br><br>
    Rg<div><input type="text" name="rg" value="{{$alunos->rg}}"/></div><br><br>
    CPF<div><input type="text" name="cpf" value="{{$alunos->cpf}}"/></div><br><br>
    Email<div><input type="email" name="email" value="{{$alunos->email}}"/></div><br><br>
    Responsável<div><input type="text" name="responsavel" value="{{$alunos->responsavel}}"/></div><br><br>
    Endereço<div><input type="text" name="endereco" value="{{$alunos->endereco}}"/></div><br><br>
    Sexo<div><input type="text" name="sexo" value="{{$alunos->sexo}}"/></div><br><br>
    Turma<div><input type="text" name="truma" value="{{$alunos->turma}}"/></div><br><br>
    <button type="submit">Salvar</button>


</form>


</body>
</html>