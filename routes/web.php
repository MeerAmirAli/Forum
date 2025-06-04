<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LatestController;
use App\Http\Controllers\signupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionController;
use App\Models\Category;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('home',HomeController::class);

Route::resource('category',CategoryController::class);

// Route::view('login','login');
Route::get('signup', [SignupController::class, 'showSignup'])->name('signup');
Route::post('signup', [SignupController::class, 'signup'])->name('signup.submit');


Route::get('login', [LoginController::class, 'showLogin'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.submit');


Route::resource('question', QuestionController::class);

Route::resource('latest',LatestController::class);
Route::resource('comment',CommentController::class);




    




