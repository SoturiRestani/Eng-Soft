<html>
<head>    
<H1 id="topo" style="font-size:50px;" >Cadastrar boletim</h1>

</head>
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

        .topo {
		background-color:#FFFFFF;
            font-size:96px;
            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
        }

        .campo{
		border-color:#000000
		border-weight:2px;
		weight:100px;

        }
		.area{
		background-color:#FFFFFF;
		}
		
    </style>

<body>
<div id="area">
<form id="Boletim" action="{{route('boletim1.store')}}" method="post"><br><br>
    {!!csrf_field() !!}
<fieldset id="campo" style="background-color:#FFFFFF;width:300px;margin-left:500px;margin-top:15px;
    ">
	<legend>Boletim</legend><br>

	
   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Aluno    <input style="background-color:#a0fff0;width:300px;" type="text" name="nome"/><br><br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Matricula <br><br><input style="background-color:#a0fff0;width:300px;" type="text" name="matricula"/><br><br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Notas    <br><br><input style="background-color:#a0fff0;width:300px;" type="text" name="notas"/><br><br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Faltas   <br><br><input style="background-color:#a0fff0;width:300px;" type="text" name="frequencia"/><br><br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Disciplina <br><br><input style="background-color:#a0fff0;width:300px;" type="text" name="disciplina"/><br><br>
   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  Bimestre <br><br><input style="background-color:#a0fff0;width:300px;" type="text" name="bimestre"/><br><br>
   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  <button type="submit">Salvar</button>

</fieldset>
</form>


</body>
</html>