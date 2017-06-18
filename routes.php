<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('Inicio.inicio');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::group(['prefix' => 'usuarios', 'as'=> 'user.'],function(){

    Route::get('/',['as'=>'index','uses'=>'UserController@index']);
    Route::get('cadastro',['as'=>'create','uses'=>'UserController@create']);
    Route::post('cadastrar/save',['as'=>'store','uses'=>'UserController@store']);
    Route::get('alterar/{userid}',['as'=>'edit','uses'=>'UserController@edit']);
    Route::post('editar/{userid}',['as'=>'update','uses'=>'UserController@update']);
    Route::post('deletar/{userid}',['as'=>'destroy','uses'=>'UserController@destroy']);
});
Route::group(['prefix' => 'alunos', 'as'=> 'alunos.'],function(){

    Route::get('/',['as'=>'index','uses'=>'AlunosController@index']);
    Route::get('cadastro',['as'=>'create','uses'=>'AlunosController@create']);
    Route::post('cadastrar/save',['as'=>'store','uses'=>'AlunosController@store']);
    Route::get('alterar/{alunosid}',['as'=>'edit','uses'=>'AlunosController@edit']);
    Route::post('editar/{alunosid}',['as'=>'update','uses'=>'AlunosController@update']);
    Route::post('deletar/{alunosid}',['as'=>'destroy','uses'=>'AlunosController@destroy']);
});

Route::group(['prefix' => 'boletim', 'as'=> 'boletim.'],function(){

    Route::get('/', ['as' => 'index', 'uses' =>'BoletimController@index']);
    Route::get('cadastro',['as'=>'create','uses'=>'BoletimController@create']);
    Route::post('cadastrar/save',['as'=>'store','uses'=>'BoletimController@store']);
    Route::get('alterar/{boletimid}',['as'=>'edit','uses'=>'BoletimController@edit']);
    Route::post('editar/{boletimid}',['as'=>'update','uses'=>'BoletimController@update']);
    Route::post('deletar/{boletimid}',['as'=>'destroy','uses'=>'BoletimController@destroy']);

    });

Route::group(['prefix' => 'aulas', 'as'=> 'aulas.'],function(){

    Route::get('/', ['as' => 'index', 'uses' =>'AulasController@index']);
    Route::get('cadastro',['as'=>'create','uses'=>'AulasController@create']);
    Route::post('cadastrar/save',['as'=>'store','uses'=>'AulasController@store']);
    Route::get('alterar/{aulasid}',['as'=>'edit','uses'=>'AulasController@edit']);
    Route::post('editar/{aulasid}',['as'=>'update','uses'=>'AulasController@update']);
    Route::post('deletar/{aulasid}',['as'=>'destroy','uses'=>'AulasController@destroy']);

});

Route::group(['prefix' => 'intervalo', 'as'=> 'intervalo.'],function(){

    Route::get('/', ['as' => 'index', 'uses' =>'IntervaloController@index']);
    Route::get('cadastro',['as'=>'create','uses'=>'IntervaloController@create']);
    Route::post('salvar/save',['as'=>'store','uses'=>'IntervaloController@store']);
    Route::get('alterar/{refeicaoid}',['as'=>'edit','uses'=>'IntervaloController@edit']);
    Route::post('editar/{refeicaoid}',['as'=>'update','uses'=>'IntervaloController@update']);
    Route::post('deletar/{refeicaoid}',['as'=>'destroy','uses'=>'IntervaloController@destroy']);

});

Route::group(['prefix' => 'funcionarios1', 'as'=> 'funcionarios1.'],function(){

    Route::get('/', ['as' => 'index', 'uses' =>'Funcionarios1Controller@index']);
    Route::get('cadastro',['as'=>'create','uses'=>'Funcionarios1Controller@create']);
    Route::post('salvar/save',['as'=>'store','uses'=>'Funcionarios1Controller@store']);
    Route::get('alterar/{funcionariosid}',['as'=>'edit','uses'=>'Funcionarios1Controller@edit']);
    Route::post('editar/{funcionariosid}',['as'=>'update','uses'=>'Funcionarios1Controller@update']);
    Route::post('deletar/{funcionariosid}',['as'=>'destroy','uses'=>'Funcionarios1Controller@destroy']);

});

Route::group(['prefix' => 'fornecedores', 'as'=> 'fornecedores.'],function(){

    Route::get('/', ['as' => 'index', 'uses' =>'FornecedoresController@index']);
    Route::get('cadastro',['as'=>'create','uses'=>'FornecedoresController@create']);
    Route::post('salvar/save',['as'=>'store','uses'=>'FornecedoresController@store']);
    Route::get('alterar/{fornecedoresid}',['as'=>'edit','uses'=>'FornecedoresController@edit']);
    Route::post('editar/{fornecedoresid}',['as'=>'update','uses'=>'FornecedoresController@update']);
    Route::post('deletar/{fornecedoresid}',['as'=>'destroy','uses'=>'FornecedoresController@destroy']);

});

Route::group(['prefix' => 'contas', 'as'=> 'contas.'],function(){

    Route::get('/', ['as' => 'index', 'uses' =>'ContasController@index']);
    Route::get('cadastro',['as'=>'create','uses'=>'ContasController@create']);
    Route::post('salvar/save',['as'=>'store','uses'=>'ContasController@store']);
    Route::get('alterar/{contasid}',['as'=>'edit','uses'=>'ContasController@edit']);
    Route::post('editar/{contasid}',['as'=>'update','uses'=>'ContasController@update']);
    Route::post('deletar/{contasid}',['as'=>'destroy','uses'=>'ContasController@destroy']);

});

Route::group(['prefix' => 'turmas', 'as'=> 'turmas.'],function(){

    Route::get('/', ['as' => 'index', 'uses' =>'TurmasController@index']);
    Route::get('cadastro',['as'=>'create','uses'=>'TurmasController@create']);
    Route::post('salvar/save',['as'=>'store','uses'=>'TurmasController@store']);
    Route::get('alterar/{turmasid}',['as'=>'edit','uses'=>'TurmasController@edit']);
    Route::post('editar/{turmasid}',['as'=>'update','uses'=>'TurmasController@update']);
    Route::post('deletar/{turmasid}',['as'=>'destroy','uses'=>'TurmasController@destroy']);

});

