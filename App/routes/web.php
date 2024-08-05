<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'index'])->name('index');

Route::get('/criar', [UserController::class,'create'])->name('create');

Route::post('/criar', [UserController::class,'store'])->name('store');

Route::get('/{id}', [UserController::class,'show'])->name('show');

Route::get('/editar', [UserController::class,'edit'])->name('edit');

Route::get('/editar/{id}', [UserController::class,'update'])->name('update');

Route::delete('/deletar/{id}', [UserController::class,'destroy'])->name('destroy');

