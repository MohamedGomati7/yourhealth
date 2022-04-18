<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;



Route::get('/',[indexController::class, 'index']);

Route::post('/sendMail',[indexController::class,'send'])->name('sendContactMailMessage');

//Route::get('/', function () {
//    return view('welcome');
//});
