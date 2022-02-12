<?php

use App\Http\Controllers\CompleteTaskController;
use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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



Route::post('/login', LoginController::class);
Route::get('/dashboard', DashboardController::class)->middleware('auth');
Route::get('logout', LogoutController::class);
Route::view('/', 'index')->name('login');
Route::post('tasks', CreateTaskController::class)->middleware('auth');
Route::patch('tasks/{task}/complete', CompleteTaskController::class)->middleware('auth');
