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
<form action="{{route('aulas.store')}}" method="post">
    {!!csrf_field() !!}
    Professor     <div><input type="text" name="nome"/></div><br><br>
    Disciplina    <div><input type="text" name="disciplina"/></div><br><br>
    Dia da semana <div><input type="text" name="diadasemana"/></div><br><br>
    Horário       <div><input type="text" name="horario"/></div><br><br>
    Turma         <div><input type="text" name="turma"/></div><br><br>
    <button type="submit">Salvar</button>


</form>


</body>
</html>