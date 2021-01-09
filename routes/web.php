<?php

use App\Http\Controllers\MenbersController;
use Illuminate\Support\Facades\Route;

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
Route::get('/menber', [MenbersController::class, 'index']);
Route::get('/menber/add', [MenbersController::class, 'add']);
Route::get('/edit/{id}', [MenbersController::class, 'edit']);





Route::post('/menber', [MenbersController::class, 'AddMenber']);
Route::put('/contact/{id}', [MenbersController::class, 'update']);
Route::delete('/contacts/{id}', [MenbersController::class, 'DeleteMenbers']);
