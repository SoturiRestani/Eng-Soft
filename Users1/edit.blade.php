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
<div >

   <a href="{{urlrl('http://localhost:8000/auth/logout')}}" style=" margin: 900pt;top: 15px;font-size: 20px;color:#000000;
    text-decoration: none;"a>Logout</a >
</div>
<body>
<form action="{{route('atualizar_usuario', [$user1->id])}}" method="post">

    {!!csrf_field() !!}
	<fieldset id="campo" style="background-color:#FFFFFF;width:200px;margin-left:500px;margin-top:15px;
    ">
	<legend>Alterar Usuario<br><br></legend>
	
   &emsp; &emsp;&emsp;&emsp; nome<br>&emsp;<input style="background-color: #a0fff0; border-color:black;" type="text" name="name" value="{{$user1->name}}"/><br>
   &emsp; &emsp;&emsp;&emsp; email<br>&emsp;<input style="background-color: #a0fff0; border-color:black;" type="email" name="email" value="{{$user1->email}}"/><br><br>
  &emsp;&emsp;&emsp;&emsp;  <button type="submit">Salvar</button>
</fieldset>

</form>


</body>
</html>