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

<div >
    <a href="{{url('http://localhost:8000/auth/logout')}}" style="margin: 900pt;top: 15px;"a>Logout</a >
</div>


<div>
    <a href="{{route('cadastrar_boletim')}}"a>Cadastrar Boletim</a>
</div><br>
<div>
    <a href="{{route('index_boletim')}}"a>Consutar Boletins</a>
</div><br>
<div>
    <a href="{{route('cadastrar_turmas')}}"a>Cadastrar Turmas</a>
</div><br>
<div>
    <a href="{{route('index_turmas')}}"a>Consultar Turmas</a>
</div><br>






</body>
</html>