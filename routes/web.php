<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
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

Route::get('/', [SiteController::class, 'index']);

Route::get('login', [UserController::class, 'login']);
Route::get('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'loginAction']);
Route::post('register', [UserController::class, 'registerAction']);
