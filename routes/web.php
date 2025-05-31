<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

<<<<<<< HEAD
Route::get('/', ['as' => 'home',
'uses'=>'App\Http\Controllers\homeController@index']);

Route::get('/login', ['as' => 'login',
'uses'=>'App\Http\Controllers\loginController@index']);

Route::post('/login/entrar',['as'=>'login.entrar',
'uses'=>'App\Http\Controllers\loginController@entrar']);

Route::get('/login/sair',['as'=>'login.sair',
'uses'=>'App\Http\Controllers\loginController@sair']);

Route::middleware('auth')->group(function(){
    Route::get('/admin/alunos',
    ['as' =>'admin.alunos',
    'uses'=>'App\Http\Controllers\Admin\alunoController@index']);

    Route::get('/admin/alunos/adicionar',
    ['as' =>'admin.alunos.adicionar',
    'uses'=>'App\Http\Controllers\Admin\AlunoController@adicionar']);

    Route::post('/admin/alunos/salvar',
    ['as' =>'admin.alunos.salvar',
    'uses'=>'App\Http\Controllers\Admin\AlunoController@salvar']);

    Route::get('/admin/alunos/editar/{id}',
    ['as' =>'admin.alunos.editar',
    'uses'=>'App\Http\Controllers\Admin\AlunoController@editar']);

    Route::put('/admin/alunos/atualizar/{id}',
    ['as' =>'admin.alunos.atualizar',
    'uses'=>'App\Http\Controllers\Admin\AlunoController@atualizar']);

    Route::get('/admin/alunos/excluir/{id}',
    ['as' =>'admin.alunos.excluir',
    'uses'=>'App\Http\Controllers\Admin\AlunoController@excluir']);

    Route::get('/admin/cursos',
    ['as' =>'admin.cursos',
    'uses'=>'App\Http\Controllers\Admin\CursoController@index']);

    Route::get('/admin/cursos/adicionar',
    ['as' =>'admin.cursos.adicionar',
    'uses'=>'App\Http\Controllers\Admin\CursoController@adicionar']);

    Route::post('/admin/cursos/salvar',
    ['as' =>'admin.cursos.salvar',
    'uses'=>'App\Http\Controllers\Admin\CursoController@salvar']);

    Route::get('/admin/cursos/editar/{id}',
    ['as' =>'admin.cursos.editar',
    'uses'=>'App\Http\Controllers\Admin\CursoController@editar']);

    Route::put('/admin/cursos/atualizar/{id}',
    ['as' =>'admin.cursos.atualizar',
    'uses'=>'App\Http\Controllers\Admin\CursoController@atualizar']);

    Route::get('/admin/cursos/excluir/{id}',
    ['as' =>'admin.cursos.excluir',
    'uses'=>'App\Http\Controllers\Admin\CursoController@excluir']);
});
=======
Route::get('/',
['as'=>'home','uses'=>'App\Http\Controllers\homeController@index']);

Route::get('/admin/alunos',
['as' =>'admin.alunos',
'uses'=>'App\Http\Controllers\Admin\alunoController@index']);

Route::get('/admin/alunos/adicionar',
['as' =>'admin.alunos.adicionar',
'uses'=>'App\Http\Controllers\Admin\AlunoController@adicionar']);

Route::post('/admin/alunos/salvar',
['as' =>'admin.alunos.salvar',
'uses'=>'App\Http\Controllers\Admin\AlunoController@salvar']);

Route::get('/admin/alunos/editar/{id}',
['as' =>'admin.alunos.editar',
'uses'=>'App\Http\Controllers\Admin\AlunoController@editar']);

Route::put('/admin/alunos/atualizar/{id}',
['as' =>'admin.alunos.atualizar',
'uses'=>'App\Http\Controllers\Admin\AlunoController@atualizar']);

Route::get('/admin/alunos/excluir/{id}',
['as' =>'admin.alunos.excluir',
'uses'=>'App\Http\Controllers\Admin\AlunoController@excluir']);

Route::get('/admin/cursos',
['as' =>'admin.cursos',
'uses'=>'App\Http\Controllers\Admin\CursoController@index']);

Route::get('/admin/cursos/adicionar',
['as' =>'admin.cursos.adicionar',
'uses'=>'App\Http\Controllers\Admin\CursoController@adicionar']);

Route::post('/admin/cursos/salvar',
['as' =>'admin.cursos.salvar',
'uses'=>'App\Http\Controllers\Admin\CursoController@salvar']);

Route::get('/admin/cursos/editar/{id}',
['as' =>'admin.cursos.editar',
'uses'=>'App\Http\Controllers\Admin\CursoController@editar']);

Route::put('/admin/cursos/atualizar/{id}',
['as' =>'admin.cursos.atualizar',
'uses'=>'App\Http\Controllers\Admin\CursoController@atualizar']);

Route::get('/admin/cursos/excluir/{id}',
['as' =>'admin.cursos.excluir',
'uses'=>'App\Http\Controllers\Admin\CursoController@excluir']);
>>>>>>> 830b4a4b7e7f0881f33efd7edb3cccbcedcda39c
