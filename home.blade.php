@extends('layouts.app')

@section('content')
   <!-- <div class="panel-heading">
    <div class="panel-heading">PROVEST</div>
    </div> -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">
                    Bem vindo, você esta logado!
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

    <div class="panel-heading">Painel Inicial</div>
            </div>

<div>
                    <div class="container">
                        <a href="http://simulador.yolasite.com/simulador.php" target="_blank">Cadastrar Notas</a>
                    </div>
                </div>

                <div>
                    <div class="container">
                        <a href="{{ url('#') }}" target="_blank">Cadastrar Frequência do Aluno</a>
                    </div>
                </div>


                <div>

                    <div class="container">
                        <a href="#" target="_blank">Atualizar Nota do Aluno</a>
                    </div>




                <div>
                    <div class="container">
                        <a href="# ">Remover Nota do Aluno</a>
                    </div>
                </div>
@endsection