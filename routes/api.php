<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('user/{id}', [UserController::class, 'getUserById']);

Route::get('users', [UserController::class, 'getAllUsers']);

Route::post('users', [UserController::class, 'createUser' ]);

Route::put('user/{id}', [UserController::class, 'updateUser']);

Route::delete('user/{id}', [UserCOntroller::class, 'deleteUser']);
