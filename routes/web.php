<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sendMail',[SampleController::class, 'sendMail']);
