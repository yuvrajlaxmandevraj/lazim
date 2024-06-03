<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
Route::get('/', [TaskController::class, 'index'])->name('home');
Route::get('/create-task',[TaskController::class, 'create'])->name('create-task');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks');