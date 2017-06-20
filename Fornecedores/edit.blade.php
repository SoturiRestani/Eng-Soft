<html>
<body>
<form action="{{route('atualizar_fornecedores', [$fornecedores->id])}}" method="post">
    {!!csrf_field() !!}
    Fornecedor<input type="text" name="fornecedor value="{{$fornecedores->fornecedor}}"/>
    <button type="submit">Salvar</button>


</form>


</body>
</html>