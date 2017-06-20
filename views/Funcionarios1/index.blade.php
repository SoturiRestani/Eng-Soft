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

@foreach($Funcionarios1 as $Funcionarios1)
   <a href="{{route('editar_funcionarios', $Funcionarios1->id)}}">
       <div>{{$Funcionarios1->nome}}</div>
       <div>{{$Funcionarios1->rg}}</div>
       <div>{{$Funcionarios1->cpf}}</div>
       <div>{{$Funcionarios1->email}}</div>
       <div>{{$Funcionarios1->endereco}}</div>
       <div>{{$Funcionarios1->sexo}}</div>
       <div>{{$Funcionarios1->cargo}}</div>
       </a>
   <form action="{{route('remover_funcionarios', [$Funcionarios1->id])}}" method="post">
       {!!csrf_field() !!}
       <button type="submit">Deletar</button>
   </form>
@endforeach



</body>
</html>