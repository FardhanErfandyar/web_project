<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;


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

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/', [PostController::class, 'index']);

Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/signup', [RegisterController::class, 'index']);

Route::post('/signup', [RegisterController::class, 'store']);

