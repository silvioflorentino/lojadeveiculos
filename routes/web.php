<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastrarCaminhaoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'MostrarHome'])->name('home');
Route::get('/editarCaminhao',[EditarCaminhaoController::class,'MostrarEditarCaminhao']);
Route::get('/cadastrar-caminhao',[CadastrarCaminhaoController::class,'MostrarCadastroCaminhao']);


