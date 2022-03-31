<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\UserController;
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

/*
|--------------------------------------------------------------------------
| Route /detalle-comic
|--------------------------------------------------------------------------
|
| This route is used to show the detail comic page
|
*/
Route::get('/detalle-comic/{id}', [ViewsController::class, 'detalleComic'])->name('detalleComic');

/*
|--------------------------------------------------------------------------
| Route /detalle-personaje
|--------------------------------------------------------------------------
|
| This route is used to show the detail personaje page
|
*/
Route::get('/detalle-personaje/{id}', [ViewsController::class, 'detallePersonaje'])->name('detallePersonaje');

/*
|--------------------------------------------------------------------------
| Route /login
|--------------------------------------------------------------------------
|
| This route in method post is used to login the user
|
*/
Route::post('/loginer', [UserController::class, 'login'])->name('loginer');

/*
|--------------------------------------------------------------------------
| Route /signup
|--------------------------------------------------------------------------
|
| This route in method post is used to register the user
|
*/
Route::post('/signup', [UserController::class, 'create'])->name('signup');

/*
|--------------------------------------------------------------------------
| Route /logout
|--------------------------------------------------------------------------
|
| This route in method get is used to logout the user
|
*/
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Route /movie
|--------------------------------------------------------------------------
|
| This route in method get is used to show the movie page
|
*/
Route::get('/movie', [ViewsController::class, 'movies'])->name('movie');

/*
|--------------------------------------------------------------------------
| Route /profile
|--------------------------------------------------------------------------
|
| This route in method get is used to show the profile page
*/
Route::get('/profile', [ViewsController::class, 'profile'])->name('profile');

/*
|--------------------------------------------------------------------------
| Route /selector
|--------------------------------------------------------------------------
|
| This route in method get is used to show the selector of avatar page
|
*/
Route::get('/selector', [ViewsController::class, 'selector'])->name('selector');

/*
|--------------------------------------------------------------------------
| Route /selector
|--------------------------------------------------------------------------
|
| This route in method post is used to change the avatar of the user
|
*/
Route::post('/selector', [PerfilController::class, 'update'])->name('users.updateAvartar');

/*
|--------------------------------------------------------------------------
| Route /update
|--------------------------------------------------------------------------
|
| This route in method get is used to show the update page
|
*/
Route::get('/update', [ViewsController::class, 'updateName'])->name('users.updateName');

/*
|--------------------------------------------------------------------------
| Route /update
|--------------------------------------------------------------------------
|
| This route in method post is used to update the name of the user
|
*/
Route::post('/update', [UserController::class, 'updateName'])->name('users.updateName');

/*
|--------------------------------------------------------------------------
| Route /new-avatar
|--------------------------------------------------------------------------
|
| This route in method get is used to show the papge of select new avatar
|
*/
Route::get('/new-avatar', [ViewsController::class, 'newAvatar'])->name('users.newAvatar');

/*
|--------------------------------------------------------------------------
| Route /new-avatar
|--------------------------------------------------------------------------
|
| This route in method post is used to assign a new avatar to the user
|
*/
Route::post('/new-avatar', [PerfilController::class, 'create'])->name('users.newAvatar');
