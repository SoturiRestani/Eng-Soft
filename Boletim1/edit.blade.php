<html>
<head>
<h1>Editar Boletim</h1>
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
			font-weight:bold;
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
    <a href="{{url('http://localhost:8000/auth/logout')}}" style=" margin: 900pt;top: 15px;font-size: 20px;color:#000000;
    text-decoration: none;"a>Logout</a >
</div>

<form action="{{route('atualizar_boletim', [$boletim1->id])}}" method="post">

    {!!csrf_field() !!}
	   
<fieldset id="campo" style="background-color:#FFFFFF;width:300px;margin-left:500px;margin-top:15px;
    ">
  &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;Nome<br>&emsp;&emsp;&emsp;&emsp;<input type="text" style="background-color: #a0fff0; border-color:black;" name="nome" value="{{$boletim1->nome}}"/><br><br>
  &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;Matricula<br>&emsp;&emsp;&emsp;&emsp;<input type="text" style="background-color: #a0fff0; border-color:black;" name="matricula" value="{{$boletim1->matricula}}"/><br><br>
  &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;Notas<br>&emsp;&emsp;&emsp;&emsp;<input type="text" style="background-color: #a0fff0; border-color:black;" name="notas" value="{{$boletim1->notas}}"/><br><br>
  &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;Frequência<br>&emsp;&emsp;&emsp;&emsp;<input type="text" style="background-color: #a0fff0; border-color:black;" name="frequencia" value="{{$boletim1->frequencia}}"/><br><br>
&emsp;&emsp;&emsp;&emsp;   &emsp;&emsp;&emsp;Disciplina<br>&emsp;&emsp;&emsp;&emsp;<input type="text"  style="background-color: #a0fff0; border-color:black;" name="disciplina" value="{{$boletim1->disciplina}}"/><br><br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button type="submit">Salvar</button>

</fieldset>

</form>


</body>
</html>