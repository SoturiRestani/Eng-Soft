<?php

//Auth::user()->tipodeusuario != professor /

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


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



Route::get('/', function ()
{
    if(!Auth::check())
    {
        return redirect('auth/login');
    }

    return redirect()->route('index_usuario');
});


Route::group(['prefix' => 'usuario', 'middleware' => 'auth'],function(){

    Route::get('/',['as'=>'index_usuario','uses'=>'User1Controller@index']);
    Route::get('cadastro',['as'=>'cadastrar_usuario','uses'=>'User1Controller@create']);
    Route::post('cadastrar/save',['as'=>'salvar_usuario','uses'=>'User1Controller@store']);
    Route::get('alterar/{user1id}',['as'=>'editar_usuario','uses'=>'User1Controller@edit']);
    Route::post('editar/{user1id}',['as'=>'atualizar_usuario','uses'=>'User1Controller@update']);
    Route::post('deletar/{user1id}',['as'=>'remover_usuario','uses'=>'User1Controller@destroy']);

Route::group(['prefix' => 'alunos'],function(){

    Route::get('/',['as'=>'index_aluno','uses'=>'Alunos1Controller@index']);
    Route::get('cadastro',['as'=>'cadastrar_aluno','uses'=>'Alunos1Controller@create']);
    Route::post('cadastrar/save',['as'=>'salvar_aluno','uses'=>'Alunos1Controller@store']);
    Route::get('alterar/{alunos1id}',['as'=>'editar_aluno','uses'=>'Alunos1Controller@edit']);
    Route::post('editar/{alunos1id}',['as'=>'atualizar_aluno','uses'=>'Alunos1Controller@update']);
    Route::post('deletar/{alunos1id}',['as'=>'remover_aluno','uses'=>'Alunos1Controller@destroy']);
});

Route::group(['prefix' => 'boletim'],function(){

    Route::get('/', ['as' => 'index_boletim', 'uses' =>'Boletim1Controller@index']);
    Route::get('cadastro',['as'=>'cadastrar_boletim','uses'=>'Boletim1Controller@create']);
    Route::post('cadastrar/save',['as'=>'salvar_boletim','uses'=>'Boletim1Controller@store']);
    Route::get('alterar/{boletim1id}',['as'=>'editar_boletim','uses'=>'Boletim1Controller@edit']);
    Route::post('editar/{boletim1id}',['as'=>'atualizar_boletim','uses'=>'Boletim1Controller@update']);
    Route::post('deletar/{boletim1id}',['as'=>'remover_boletim','uses'=>'Boletim1Controller@destroy']);

    });

Route::group(['prefix' => 'aulas'],function(){

    Route::get('/', ['as' => 'index_aulas', 'uses' =>'AulasController@index']);
    Route::get('cadastro',['as'=>'cadastrar_aulas','uses'=>'AulasController@create']);
    Route::post('cadastrar/save',['as'=>'salvar_aulas','uses'=>'AulasController@store']);
    Route::get('alterar/{aulasid}',['as'=>'editar_aulas','uses'=>'AulasController@edit']);
    Route::post('editar/{aulasid}',['as'=>'atualizar_aulas','uses'=>'AulasController@update']);
    Route::post('deletar/{aulasid}',['as'=>'remover_aulas','uses'=>'AulasController@destroy']);

});

Route::group(['prefix' => 'intervalo'],function(){

    Route::get('/', ['as' => 'index_intervalo', 'uses' =>'IntervaloController@index']);
    Route::get('cadastro',['as'=>'cadastrar_intervalo','uses'=>'IntervaloController@create']);
    Route::post('salvar/save',['as'=>'salvar_intervalo','uses'=>'IntervaloController@store']);
    Route::get('alterar/{refeicaoid}',['as'=>'editar_intervalo','uses'=>'IntervaloController@edit']);
    Route::post('editar/{refeicaoid}',['as'=>'atualizar_intervalo','uses'=>'IntervaloController@update']);
    Route::post('deletar/{refeicaoid}',['as'=>'remover_intervalo','uses'=>'IntervaloController@destroy']);

});

Route::group(['prefix' => 'funcionarios'],function(){

    Route::get('/', ['as' => 'index_funcionarios', 'uses' =>'Funcionarios1Controller@index']);
    Route::get('cadastro',['as'=>'cadastrar_funcionarios','uses'=>'Funcionarios1Controller@create']);
    Route::post('salvar/save',['as'=>'salvar_funcionarios','uses'=>'Funcionarios1Controller@store']);
    Route::get('alterar/{funcionariosid}',['as'=>'editar_funcionarios','uses'=>'Funcionarios1Controller@edit']);
    Route::post('editar/{funcionariosid}',['as'=>'atualizar_funcionarios','uses'=>'Funcionarios1Controller@update']);
    Route::post('deletar/{funcionariosid}',['as'=>'remover_funcionarios','uses'=>'Funcionarios1Controller@destroy']);

});

Route::group(['prefix' => 'fornecedores'],function(){

    Route::get('/', ['as' => 'index_fornecedores', 'uses' =>'FornecedoresController@index']);
    Route::get('cadastro',['as'=>'cadastrar_fornecedores','uses'=>'FornecedoresController@create']);
    Route::post('salvar/save',['as'=>'salvar_fornecedores','uses'=>'FornecedoresController@store']);
    Route::get('alterar/{fornecedoresid}',['as'=>'editar_fornecedores','uses'=>'FornecedoresController@edit']);
    Route::post('editar/{fornecedoresid}',['as'=>'atualizar_fornecedores','uses'=>'FornecedoresController@update']);
    Route::post('deletar/{fornecedoresid}',['as'=>'remover_fornecedores','uses'=>'FornecedoresController@destroy']);

});

Route::group(['prefix' => 'contas'],function(){

    Route::get('/', ['as' => 'index_contas', 'uses' =>'ContasController@index']);
    Route::get('cadastro',['as'=>'cadastrar_contas','uses'=>'ContasController@create']);
    Route::post('salvar/save',['as'=>'salvar_contas','uses'=>'ContasController@store']);
    Route::get('alterar/{contasid}',['as'=>'editar_contas','uses'=>'ContasController@edit']);
    Route::post('editar/{contasid}',['as'=>'atualizar_contas','uses'=>'ContasController@update']);
    Route::post('deletar/{contasid}',['as'=>'remover_contas','uses'=>'ContasController@destroy']);

});

Route::group(['prefix' => 'turmas'],function(){

    Route::get('/', ['as' => 'index_turmas', 'uses' =>'TurmasController@index']);
    Route::get('cadastro',['as'=>'cadastrar_turmas','uses'=>'TurmasController@create']);
    Route::post('salvar/save',['as'=>'salvar_turmas','uses'=>'TurmasController@store']);
    Route::get('alterar/{turmasid}',['as'=>'editar_turmas','uses'=>'TurmasController@edit']);
    Route::post('editar/{turmasid}',['as'=>'atualizar_turmas','uses'=>'TurmasController@update']);
    Route::post('deletar/{turmasid}',['as'=>'remover_turmas','uses'=>'TurmasController@destroy']);
});

Route::group(['prefix' => 'discente'],function(){
    Route::get('/', ['as'=> 'index_discente', 'uses'=>'DiscenteController@index']);
});
    Route::group(['prefix' => 'professor'],function(){
        Route::get('/', ['as'=> 'index_professor', 'uses'=>'ProfessorController@index']);

    });


});