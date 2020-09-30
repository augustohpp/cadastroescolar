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
use App\Aluno;
use App\Alunoturma;
use App\Professor;


Route::get('/', function() {
    return view('welcome');
})->middleware('auth');

/* Routes Alunos */

Route::get('/alunos/cadastro','AlunoController@create')->name('cadastroAluno');
Route::post('/alunos', 'AlunoController@store');
Route::get('/alunos', 'AlunoController@index')->name('listaAluno');
Route::get('/alunos/info/{id}', 'AlunoController@show');
Route::get('/alunos/delete/{id}', 'AlunoController@destroy');
Route::get('/alunos/editar/{id}', 'AlunoController@edit');
Route::post('/alunos/{id}', 'AlunoController@update');
//Route::post('/pdf', 'AlunoTurmaController@get');
Route::get('/pdf',function() {
    $collection = Aluno::all(); 
    $cadastros = json_decode(json_encode($collection));
    $pdf = \PDF::loadView('pdf', compact('cadastros'));
    return $pdf->stream('exemplo.pdf');
})->name('pdf');

/* Routes Professores */

Route::get('/professores/cadastro', 'ProfessorController@create')->name('cadastroProf');
Route::post('/professores', 'ProfessorController@store');
Route::get('/professores', 'ProfessorController@index')->name('listaProfessor');
Route::get('/professores/info/{id}', 'ProfessorController@show');
Route::get('/professores/delete/{id}', 'ProfessorController@destroy');
Route::get('/professores/editar/{id}', 'ProfessorController@edit');
Route::post('/professores/{id}', 'ProfessorController@update');

/* Routes Turmas */

Route::get('/turmas/cadastro', 'TurmaController@create')->name('cadastroTurma');
Route::post('/turmas', 'TurmaController@store');
Route::get('/turmas', 'TurmaController@index')->name('listaTurma');
Route::get('/turmas/info/{id}', 'TurmaController@show');
Route::get('/turmas/delete/{id}', 'TurmaController@destroy');
Route::get('/turmas/editar/{id}', 'TurmaController@edit');
Route::post('/turmas/{id}', 'TurmaController@update');



/* Route para Login */

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/* Login Admin */
Route::get('/admin', 'AdminController@index')->name('homeadmin');

Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');


