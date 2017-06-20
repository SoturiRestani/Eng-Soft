<html>
<head>

</head>
<body>

@foreach($Fornecedores as $Fornecedores)
   <a href="{{route('editar_fornecedores', $Fornecedores->id)}}">{{$Fornecedores->fornecedor}}</a>
   <form action="{{route('remover_fornecedores', [$Fornecedores->id])}}" method="post">
       {!!csrf_field() !!}
       <button type="submit">Deletar</button>
   </form>
@endforeach



</body>
</html>