<?php


use App\Http\Controllers\signupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home','home');

// Route::view('login','login');
Route::post('/signup',[signupController::class,'signup']);
Route::get('/signup',[signupController::class,'showSignup']);

Route::get('/login', [LoginController::class, 'showLogin']);
Route::post('/login', [LoginController::class, 'login']);

Route::view('/question','addQuestion');


    Route::get('/questions/create', [QuestionController::class, 'create'])->name('questions.create');
    Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');




