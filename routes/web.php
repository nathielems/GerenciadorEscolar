<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Database\Eloquent\Collection;
Route::get('/', function() {
    return view('welcome');
});
Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/lista', function() {
    $collection = collect([
        ['id' => 1, 'name' => 'John','surname' => 'Constantine', 'age' => 45],
        ['id' => 2, 'name' => 'Jane', 'surname' => 'Tarzan', 'age' => 33],
        ['id' => 3, 'name' => 'James', 'surname' => 'Hetfield', 'age' => 56],
        ['id' => 4, 'name' => 'Pablo', 'surname' => 'Picasso', 'age' => 91],
        ['id' => 5, 'name' => 'Elton', 'surname' => 'John', 'age' => 72],
    ]);
    //dd($collection);
    $cadastros = json_decode(json_encode($collection));
    // dd($cadastros);
    return view('tabela', compact('cadastros'));
})->name('lista');

Route::get('/pdf',function() {
    $collection = collect([
        ['id' => 1, 'name' => 'John','surname' => 'Constantine', 'age' => 45],
        ['id' => 2, 'name' => 'Jane', 'surname' => 'Tarzan', 'age' => 33],
        ['id' => 3, 'name' => 'James', 'surname' => 'Hetfield', 'age' => 56],
        ['id' => 4, 'name' => 'Pablo', 'surname' => 'Picasso', 'age' => 91],
        ['id' => 5, 'name' => 'Elton', 'surname' => 'John', 'age' => 72],
    ]);
    $cadastros = json_decode(json_encode($collection));
    $pdf = \PDF::loadView('pdf', compact('cadastros'));
    return $pdf->stream('exemplo.pdf');
})->name('pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
