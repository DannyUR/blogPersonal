<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostsController;

//ENDPOINT
Route::get('/', function () {
    return view('welcome');
});
Route::get('/contacto', function (){
    return view('contacto');
});
Route::get('/about', function (){
    return view('about');
});
Route::get('/post', function (){
    return view('post');
});
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route:: resource('/posts', PostsController::class);
    Route::get('/posts/actions/add',[PostsController::class,'showAdd']);
    Route::get('/users', [UserController::class, 'getUsers'])->name('dashboard.users');
    Route::post('/users', [UserController::class, 'createUsers'])->name('dashboard.users.create');
});

Auth::routes();
Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home');


