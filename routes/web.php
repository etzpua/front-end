<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::middleware('guest')->group(function(){

Route::get('/', [UserController::class, 'form_register']);
Route::post('/', [UserController::class, 'register']);

Route::get('/login', [UserController::class, 'form_login']);
Route::post('/login', [UserController::class, 'login']);
//});

Route::middleware('auth')->group(function(){

Route::get('/users', [UserController::class, 'users'])->name('users');

Route::get('/edit/{id}', [UserController::class, 'form_edit'])->name('edit.form');
Route::post('/edit', [UserController::class, 'edit'])->name('edit');

Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');

Route::get('/security/{id}', [UserController::class, 'form_security'])->name('form_security');
Route::post('/security', [UserController::class, 'editSecurity'])->name('editSecurity');

Route::get('/status/{id}', [UserController::class, 'form_status'])->name('form_status');
Route::post('/status', [UserController::class, 'status'])->name('status');

Route::get('/avatar/{id}', [UserController::class, 'form_avatar'])->name('form_avatar');
Route::post('/avatar', [UserController::class, 'avatar'])->name('avatar');

Route::get('/create', [UserController::class, 'form_create'])->name('form_create');
Route::post('/create', [UserController::class, 'createUser'])->name('createUser');

Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');

});



