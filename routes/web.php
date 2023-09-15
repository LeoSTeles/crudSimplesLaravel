<?php

use App\Http\Controllers\CandidatoController;
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

Route::get('/', [CandidatoController::class, 'index']);
Route::get('/cadastro', [CandidatoController::class, 'cadastro']);
Route::get('/exibir/{id}', [CandidatoController::class, 'exibir']);
Route::post('/salvar', [CandidatoController::class, 'salvarCandidato']);
Route::get('/delete/{id}', [CandidatoController::class, 'excluirCandidato']);
Route::put('/atualizar/{id}', [CandidatoController::class, 'atualizarCandidato']);
