<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/getFriends',[HomeController::class,'getFriends']);
Route::post('/session/create',[SessionController::class,'create']);
//Route::post('/session/{session}/send',[ChatController::class,'send']);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
