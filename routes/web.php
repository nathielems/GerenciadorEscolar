<?php

use App\Aluno;
use App\Turma;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\TurmaController;
use Illuminate\Database\Eloquent\Collection;

Route::get('/', function() {
    return view('welcome');
});

// ALUNOS 

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::post('/salvar-aluno', 'AlunoController@store')->name('salvarAluno');

Route::get('/lista', 'AlunoController@index')->name('lista');

Route::get('/pdf-alunos',function() {
    $cadastros=Aluno::all();
    $pdf = \PDF::loadView('pdf', compact('cadastros'));
    return $pdf->stream('exemplo.pdf');
})->name('pdf');

//TURMAS

Route::get('/cadastro-turma', function() {
    return view('cadastroTurma');
})->name('cadastroTurma');

Route::get('/lista-turma', 'TurmaController@index')->name('listaTurma');


Route::get('/pdf-turma',function() {
    $cadastrosTurma = Turma::all();
    $pdf = \PDF::loadView('pdfTurma', compact('cadastrosTurma'));
    return $pdf->stream('exemplo.pdf');
})->name('pdfTurma');

Route::post('/salvar-turma', 'TurmaController@store')->name('salvarTurma');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
