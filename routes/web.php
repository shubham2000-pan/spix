<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
Route::get('/dashboard', [UserController::class, 'dashboard']);

Route::get('/list', [UserController::class, 'index']);

Route::get('/add', [UserController::class, 'create']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::get('/delete/{id}', [UserController::class, 'destroy']);
Route::post('/update', [UserController::class, 'update']);
Route::post('/update_sorting', [UserController::class, 'update_sorting']);
});

