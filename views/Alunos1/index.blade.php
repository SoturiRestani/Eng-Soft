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

@foreach($Alunos1 as $Alunos1)
   <a href="{{route('editar_aluno', $Alunos1->id)}}">{{$Alunos1->nome}}</a>
   <form action="{{route('remover_aluno')}}" method="post">

       <button type="submit">Deletar</button>
   </form>
@endforeach



</body>
</html>