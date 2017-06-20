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
<form action="{{route('atualizar_funcionarios', [$funcionarios1->id])}}" method="post">
    {!!csrf_field() !!}
    <div>Funcionario<br><input type="text" name="nome" value="{{$funcionarios1->nome}}"/></div>
    <div>RG<br><input type="text" name="rg" value="{{$funcionarios1->rg}}"/></div>
    <div>CPF<br><input type="text" name="cpf" value="{{$funcionarios1->cpf}}"/></div>
    <div>Email<br><input type="email" name="email" value="{{$funcionarios1->email}}"/></div>
    <div>Endereço<br><input type="text" name="endereco" value="{{$funcionarios1->endereco}}"/></div>
    <div>Sexo<br><input type="text" name="sexo" value="{{$funcionarios1->sexo}}"/></div>
    <div>Cargo<br><input type="text" name="cargo" value="{{$funcionarios1->cargo}}"/></div>
    <button type="submit">Salvar</button>


</form>


</body>
</html>