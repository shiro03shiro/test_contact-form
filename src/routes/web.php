<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;           //dashboard表示確認用

Route::get('/', [ContactController::class, 'index'])->name('home');
Route::post('/', [ContactController::class, 'create'])->name('contact.form');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/thanks', [ContactController::class, 'store'])->name('contact.thanks');


Route::get('/admin', [AdminController::class, 'index']);


// Route::middleware('auth')->group(function () {
//     Route::get('/login', [AuthController::class, 'login']);
// });