<?php

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\ImageContrroller;
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

Route::resource('/profile', ProfileController::class)->middleware('auth');

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

Route::get('/districts/{district:slug}', [DistrictController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/create', [DashboardPostController::class, 'create'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::delete('/dashboard/posts/{post:id}', [DashboardPostController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard/admin/posts', [DashboardPostController::class, 'publish'])->middleware('can:view_dashboard');

Route::get('/dashboard/admin/districts', [DistrictController::class, 'dashboard'])->middleware('can:view_dashboard');

Route::get('/dashboard/admin/districts/create', [DistrictController::class, 'create'])->middleware('auth');

Route::post('/insertlapangan', [InsertFieldController::class, 'insertlapangan'])->name('insertlapangan');

Route::post('/dashboard/admin/districts/create/add', [DistrictController::class, 'store']);

Route::delete('/dashboard/admin/districts/delete/{district:id}', [DistrictController::class, 'destroy']);

Route::get('/dashboard/admin/districts/edit/{district:id}', [DistrictController::class, 'edit']);

Route::post('/dashboard/admin/districts/distritc/edit/{district:id}', [DistrictController::class, 'update']);

Route::delete('/images/{image:id}', [ImageContrroller::class, 'destroyImage']);
