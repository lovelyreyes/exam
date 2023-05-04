<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index']);

Route::get('/add', [UserController::class, 'add_user']);

Route::post('/add', [UserController::class, 'save_user']);

Route::get('/edit/{id}', [UserController::class, 'edit_user']);

Route::post('/update/{id}', [UserController::class, 'update_user']);

Route::get('/delete/{id}', [UserController::class, 'delete_user']);




