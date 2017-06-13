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
<form action="{{route('user.store')}}" method="post">
    {!!csrf_field() !!}
    Nome<div><input type="text" name="nome"/></div><br><br>
    Senha<div><input type="password" name="password"/></div><br><br>
    email<div><input type="email" name="email"/></div><br><br>
    <button type="submit">Salvar</button>


</form>


</body>
</html>