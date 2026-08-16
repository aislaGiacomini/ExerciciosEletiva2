<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exercicio1', [ExerciciosController::class, 'abrirFormExer1']);
Route::post('/exer1resp', [ExerciciosController::class, 'respostaExer1']);

Route::get('/exercicio2', [ExerciciosController::class, 'abrirFormExer2']);
Route::post('/exer2resp', [ExerciciosController::class, 'respostaExer2']);

Route::get('/exercicio3', [ExerciciosController::class, 'abrirFormExer3']);
Route::post('/exer3resp', [ExerciciosController::class, 'respostaExer3']);

Route::get('/exercicio4', [ExerciciosController::class, 'abrirFormExer4']);
Route::post('/exer4resp', [ExerciciosController::class, 'respostaExer4']);

Route::get('/exercicio5', [ExerciciosController::class, 'abrirFormExer5']);
Route::post('/exer5resp', [ExerciciosController::class, 'respostaExer5']);

Route::get('/exercicio6', [ExerciciosController::class, 'abrirFormExer6']);
Route::post('/exer6resp', [ExerciciosController::class, 'respostaExer6']);

Route::get('/exercicio7', [ExerciciosController::class, 'abrirFormExer7']);
Route::post('/exer7resp', [ExerciciosController::class, 'respostaExer7']);

Route::get('/exercicio8', [ExerciciosController::class, 'abrirFormExer8']);
Route::post('/exer8resp', [ExerciciosController::class, 'respostaExer8']);

Route::get('/exercicio9', [ExerciciosController::class, 'abrirFormExer9']);
Route::post('/exer9resp', [ExerciciosController::class, 'respostaExer9']);

Route::get('/exercicio10', [ExerciciosController::class, 'abrirFormExer10']);
Route::post('/exer10resp', [ExerciciosController::class, 'respostaExer10']);

Route::get('/exercicio11', [ExerciciosController::class, 'abrirFormExer11']);
Route::post('/exer11resp', [ExerciciosController::class, 'respostaExer11']);