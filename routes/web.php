<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome',[
        'projectName' => 'quiz-system',
        'version' => '1.0.0',
        'description' => 'This is a custrom application built for quiz.'
    ]);
});

Route::view('/admin-login','admin-login');

Route::post('/admin-login',[AdminController::class,'login']);
Route::get('/dashboard',[AdminController::class,'dashboard']);
