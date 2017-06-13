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
<form action="{{route('contas.store')}}" method="post">
    {!!csrf_field() !!}
    Conta a Pagar<div><input type="text" name="conta"/></div><br><br>
    Pagamentos a Efetuar<div><input type="text" name="pagamento"/></div><br><br>
    Salários<div><input type="text" name="salarios"/></div><br><br>
    Gastos<div><input type="text" name="gastos"/></div><br><br>
    Vencimenos<div><input type="text" name="vencimentos"/></div><br><br>
    Valor<div><input type="text" name="valor"/></div><br><br>
    Descrição Conta<div><input type="text" name="descricao"/></div><br><br>

    <button type="submit">Salvar</button>


</form>


</body>
</html>