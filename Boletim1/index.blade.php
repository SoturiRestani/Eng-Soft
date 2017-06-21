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
<a href="{{urlrl('http://localhost:8000/auth/logout')}}" style=" margin: 900pt;top: 15px;font-size: 20px;color:#000000;
    text-decoration: none;"a>Logout</a >
	</div>

<fieldset style="background-color:#FFFFFF;width:250px;">
<legend>Alterar Boletim<br><br></legend>


@foreach($Boletim1 as $Boletim1)
 {!!csrf_field() !!}
    <a href="{{route('editar_boletim', $Boletim1->id)}}">{{$Boletim1->nome}}</a>
    <div>{{$Boletim1->notas}}</div>
    <div>{{$Boletim1->frequencia}}</div></a>
	{!!csrf_field() !!}
   <form action="{{route('remover_boletim', [$Boletim1->id])}}" method="post"><br>
   
      
  &emsp;&emsp; &emsp;&emsp;&emsp;<button style="background-color:#a0fff0;"type="submit">Deletar</button>
   </form>
@endforeach
</fieldset>


</body>
</html>