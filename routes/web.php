<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

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

Route::get('/', [BoardController::class, 'getBoardView']);

Route::post('/board/update', [BoardController::class, 'updateBoard']);

Route::get('/board/delete/{id}', [BoardController::class, 'deleteBoardItem']);
