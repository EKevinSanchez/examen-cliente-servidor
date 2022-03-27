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

/*
/--------------------------------------------------------------------------
| Route /
|--------------------------------------------------------------------------
|
| This route is used to show the index page
|
*/
Route::get('/', [ViewsController::class, 'index'])->name('index');

/*
/--------------------------------------------------------------------------
| Route /comics
|--------------------------------------------------------------------------
|
| This route is used to show the about comics page
|
*/
Route::get('/comics', [ViewsController::class, 'comics'])->name('comics');

/*
|--------------------------------------------------------------------------
| Route /personajes
|--------------------------------------------------------------------------
|
| This route is used to show the about personajes page
|
*/
Route::get('/personajes', [ViewsController::class, 'personajes'])->name('personajes');

/*
|--------------------------------------------------------------------------
| Route /login
|--------------------------------------------------------------------------
|
| This route is used to show the login page
|
*/
Route::get('/login', [ViewsController::class, 'login'])->name('login');

/*
|--------------------------------------------------------------------------
| Route /signup
|--------------------------------------------------------------------------
|
| This route is used to show the register page
|
*/
Route::get('/signup', [ViewsController::class, 'signup'])->name('signup');


Route::get('/details', [ViewsController::class, 'details'])->name('details');