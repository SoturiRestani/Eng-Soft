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
<form action="{{route('atualizar_aluno', [$alunos1->id])}}" method="post">
    {!!csrf_field() !!}
    Nome<div><input type="text" name="nome" value="{{$alunos1->nome}}"/></div><br><br>
    Rg<div><input type="text" name="rg" value="{{$alunos1->rg}}"/></div><br><br>
    CPF<div><input type="text" name="cpf" value="{{$alunos1->cpf}}"/></div><br><br>
    Email<div><input type="email" name="email" value="{{$alunos1->email}}"/></div><br><br>
    Responsável<div><input type="text" name="responsavel" value="{{$alunos1->responsavel}}"/></div><br><br>
    Endereço<div><input type="text" name="endereco" value="{{$alunos1->endereco}}"/></div><br><br>
    Sexo<div><input type="text" name="sexo" value="{{$alunos1->sexo}}"/></div><br><br>
    Turma<div><input type="text" name="truma" value="{{$alunos1->turma}}"/></div><br><br>
    <button type="submit">Salvar</button>


</form>


</body>
</html>