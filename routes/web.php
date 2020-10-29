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
// use Illuminate\Routing\Route;
use App\Aluno;
use App\Professor;
use App\Turma;
use App\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use OwenIt\Auditing\Models\Audit;

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
Route::get('/alunos/pdf', 'AlunoController@pdf')->name('pdfAluno');

/* Routes Professores */

Route::get('/professores/cadastro', 'ProfessorController@create')->name('cadastroProf');
Route::post('/professores', 'ProfessorController@store');
Route::get('/professores', 'ProfessorController@index')->name('listaProfessor');
Route::get('/professores/info/{id}', 'ProfessorController@show');
Route::get('/professores/delete/{id}', 'ProfessorController@destroy');
Route::get('/professores/editar/{id}', 'ProfessorController@edit');
Route::post('/professores/{id}', 'ProfessorController@update');
Route::get('/professores/pdf', 'ProfessorController@pdf')->name('pdfProfessor');

/* Routes Turmas */

Route::get('/turmas/cadastro', 'TurmaController@create')->name('cadastroTurma');
Route::post('/turmas', 'TurmaController@store');
Route::get('/turmas', 'TurmaController@index')->name('listaTurma');
Route::get('/turmas/info/{id}', 'TurmaController@show');
Route::get('/turmas/delete/{id}', 'TurmaController@destroy');
Route::get('/turmas/editar/{id}', 'TurmaController@edit');
Route::post('/turmas/{id}', 'TurmaController@update');
Route::get('/turmas/pdp', 'TurmaController@pdf')->name('pdfTurma');


Route::get('/teste', function(){
    $audits = Audit::find(2);
    return view('teste', compact('audits'));
});

// Routes para Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Routes para Registrar
Route::get('/usuarios/novo', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/usuarios/novo', 'Auth\RegisterController@register');

// Routes para Resetar Senhas
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Demais Routes
Route::get('/usuarios', 'UserController@show')->name('listaUser');
Route::get('/home', 'UserController@index')->name('home');
Route::get('/usuarios/delete/{id}', 'UserController@destroy');
Route::get('/usuarios/auditoria/{id}', 'UserController@audit');
// Auth::routes();


Route::get('/teste', function(){
    $aluno = Aluno::find(1);
    return view('teste',compact('aluno'));
});