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
<form action="{{route('intervalo.store')}}" method="post">
    {!!csrf_field() !!}
    Nome da Refeiçao     <div><input type="text" name="nome"/></div><br><br>
    Valor da Refeiçao    <div><input type="text" name="valorrefeicao"/></div><br><br>
    Dia da semana <div><input type="text" name="diadasemana"/></div><br><br>
    Descriçao       <div><input type="text" name="descricao"/></div><br><br>

    <button type="submit">Salvar</button>


</form>


</body>
</html>