<html>
<head>

</head>
<body>

@foreach($Fornecedores as $Fornecedores)
   <a href="{{route('fornecedores.edit', $Fornecedores->id)}}">{{$Fornecedores->fornecedor}}</a>
   <form action="{{route('fornecedores.destroy', [$Fornecedores->id])}}" method="post">
       {!!csrf_field() !!}
       <button type="submit">Deletar</button>
   </form>
@endforeach



</body>
</html>