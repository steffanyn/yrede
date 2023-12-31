<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teste', function () {
    return "TESTADO!!!";
});

Route::get('/lista-usuarios', function () {
    $usuarios = User::all();

    return view('listaUsuarios', compact('usuarios'));

})->name('lista-usuarios');

Route::view('/cadastra-usuario','cadastraUsuarios');

Route::post('/salva-usuario',function(Request $request){

    $usuario = new User ();
    $usuario->usuario=$request->input('usuario');
    $usuario->email=$request->input('email');
    $usuario->bio=$request->input('bio');
    $usuario->nome=$request->input('nome');
    $usuario->senha=$request->input('senha');
    $usuario->save();

    return"Salvo com sucesso!";

})->name('salva-usuario');

