<?php

use App\Http\Controllers\ViewsController;
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

Route::get('/', [ViewsController::class, 'index'])->name('index');
Route::get('/comics', [ViewsController::class, 'comics'])->name('comics');
Route::get('/personajes', [ViewsController::class, 'personajes'])->name('personajes');
Route::get('/login', [ViewsController::class, 'login'])->name('login');
Route::get('/signup', [ViewsController::class, 'signup'])->name('signup');
Route::get('/details', [ViewsController::class, 'details'])->name('details');