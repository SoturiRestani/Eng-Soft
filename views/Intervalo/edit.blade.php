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
<form action="{{route('atualizar_intervalo', [$intervalo->id])}}" method="post">
    {!!csrf_field() !!}
    Nome da Refeição<br><input type="text" name="nome" value="{{$intervalo->nome}}"/><br>
    Valor da Refeição<br><input type="text" name="valorerefeicao" value="{{$intervalo->valorerefeicao}}"/><br>
    Dia da Semana<br><input type="text" name="diadasemana" value="{{$intervalo->diadasemana}}"/><br>
    Descrição<br><input type="text" name="descricao" value="{{$intervalo->descricao}}"/><br>
    <button type="submit">Salvar</button>


</form>


</body>
</html>