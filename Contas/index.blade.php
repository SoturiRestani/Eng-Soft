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

@foreach($Contas as $Contas)
   <a href="{{route('contas.edit', $Contas->id)}}">{{$Contas->financa}}</a>
   <form action="{{route('contas.destroy', [$Contas->id])}}" method="post">
       {!!csrf_field() !!}
       <button type="submit">Deletar</button>
   </form>
@endforeach



</body>
</html>