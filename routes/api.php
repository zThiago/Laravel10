<?php

use App\Http\Controllers\LivroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('livros', [LivroController::class, 'create']);
Route::get('livros', [LivroController::class, 'all']);
Route::get('livros/{id}', [LivroController::class, 'show']);
Route::put('livros/{id}', [LivroController::class, 'update']);
Route::delete('livros/{id}', [LivroController::class, 'delete']);
