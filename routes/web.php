<?php

use App\Aluno;
use App\Turma;
use App\Aluno_turma;
use App\User;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\UserController;
use App\Professor;
use Illuminate\Database\Eloquent\Collection;

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function() {
        return view('welcome');
    });

    // ALUNOS 

    Route::get('/cadastro', 'AlunoController@create')->name('cadastro');

    Route::post('/salvar-aluno', 'AlunoController@store')->name('Alunos.salvarAluno');

    Route::get('/lista', 'AlunoController@index')->name('lista');

    Route::get('/pdf-alunos', 'AlunoController@pdf')->name('pdf');

    Route::get('/alunos/deletar/{id}','AlunoController@destroy')->name('deletarAluno');

    Route::get('/alunos/editar/{id}', 'AlunoController@edit')->name('editarAluno');

    Route::post('/alunos/editar/atualizar/{id}', 'AlunoController@update')->name('atualizarAluno');

    //TURMAS

    Route::get('/cadastro-turma', 'TurmaController@create')->name('cadastroTurma');

    Route::get('/lista-turma', 'TurmaController@index')->name('listaTurma');

    Route::get('/pdf-aluno-turma', 'AlunoTurmaController@pdf')->name('pdfAlunoTurma');

    Route::get('/pdf-turma', 'TurmaController@pdf')->name('pdfTurma');

    Route::post('/salvar-turma', 'TurmaController@store')->name('salvarTurma');
   
    Route::get('/turmas/deletar/{id}','TurmaController@destroy')->name('deletarTurma');

    Route::get('/turmas/editar/{id}', 'TurmaController@edit')->name('editarTurma');

    Route::post('/turmas/editar/atualizar{id}', 'TurmaController@update')->name('atualizarTurma');

    // PROFESSORES 

    Route::get('/cadastro-professores', 'ProfessorController@create')->name('cadastroProfessores');

    Route::post('/salvar-professor', 'ProfessorController@store')->name('salvarProfessor');

    Route::get('/lista-professores', 'ProfessorController@index')->name('listaProfessores');

    Route::get('/pdf-professores', 'ProfessorController@pdf')->name('pdfProfessores');

    Route::get('/professores/deletar/{id}','ProfessorController@destroy')->name('deletarProfessor');

    Route::get('/professores/editar/{id}', 'ProfessorController@edit')->name('editarProfessor');

    Route::post('/professores/editar/atualizar/{id}', 'ProfessorController@update')->name('atualizarProfessor');

    //USERS

    Route::get('/cadastro-users', 'UserController@create')->name('cadastroUsers');

    Route::post('/salvar-user', 'UserController@store')->name('salvarUser');

    Route::get('/lista-users', 'UserController@index')->name('listaUsers');

    Route::get('/users/deletar/{id}','UserController@destroy')->name('deletarUser');

    Route::get('/users/editar/{id}', 'UserController@edit')->name('editarUser');

    Route::post('/users/editar/atualizar/{id}', 'UserController@update')->name('atualizarUser');

    //AUDITORIA

    Route::get('/auditoria', 'AuditController@index')->name('auditIndex');


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
