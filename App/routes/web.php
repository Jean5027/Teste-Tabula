<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'index'])->name('index');

Route::get('/criar', [UserController::class,'create'])->name('create');

Route::post('/criar', [UserController::class,'store'])->name('store');

Route::get('/{user}', [UserController::class,'show'])->name('show');

Route::get('/{user}/editar', [UserController::class,'edit'])->name('edit');

Route::put('/editar/{user}', [UserController::class,'update'])->name('update');

Route::delete('/deletar/{user}', [UserController::class,'destroy'])->name('destroy');

