<?php

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Models\District;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InsertFieldController;


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

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/signup', [RegisterController::class, 'index']);

Route::post('/signup', [RegisterController::class, 'store']);

Route::get('/districts', function () {
    return view('districts', [
        'title' => 'Post Districts',
        'districts' => District::all()
    ]);
});

Route::get('/districts/{district:slug}', function (District $district) {
    return view('district', [
        'title' => $district->name,
        'posts' => $district->posts,
        'district' => $district->name,
    ]);
});


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/tambahlapangan', [InsertFieldController::class, 'tambahlapangan'])->name('tambahlapangan');   
Route::post('/insertlapangan', [InsertFieldController::class, 'insertlapangan'])->name('insertlapangan');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth', 'can:view-dashboard');
Route::resource('/dashboard/addfield', InsertFieldController::class)->middleware('auth', 'can:view-dashboard');
