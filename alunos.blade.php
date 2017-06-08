@extends('layouts.app')
        <!doctype html>
<html>

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
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">

                            <div class="panel-heading">Painel Inicial</div>

                            <div>
                                <div class="container">
                                    <a href="{{ url('/notas') }}" target="_blank">Consultar Notas</a>
                                </div>
                            </div>

                            <div>
                                <div class="container">
                                    <a href="{{ url('/Frequencia') }}" target="_blank">Consultar Frequência</a>
                                </div>
                            </div>


                            <div>

                                <div class="container">
                                    <a href="{{ url('/horarios') }}" target="_blank">Consultar Horário</a>
                                </div>


                                <div>
                                    <div class="container">
                                        <a href="{{ url('/materias') }}" target="_blank">Consultar Matérias Matriculadas</a>
                                    </div>
                                </div>
@endsection
</html>