<html>
<body>
<form action="{{route('fornecedores.store')}}" method="post">
    {!!csrf_field() !!}
    Nome Fantasia <div><input type="text" name="nome"/></div><br><br>
    Cnpj<div><input type="text" name="cnpj"/></div><br><br>
    Mercadoria(s) <div><input type="text" name="mercadoria"/></div><br><br>
    Endereço<div><input type="text" name="endereco"/></div><br><br>

    <button type="submit">Salvar</button>


</form>


</body>
</html>