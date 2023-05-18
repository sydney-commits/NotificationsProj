<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/sendMail',[SampleController::class, 'sendMail']);

Route::get('/sendMailEvent',[SampleController::class, 'sendMailEvent']);

Route::get('/generatePDF',[SampleController::class, 'generatePDF']);


Route::get('/SaveData',[SampleController::class, 'SaveData']);





