<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;


Route::view('/', 'home', [
    'name' => 'John Doe',
    'bio' => 'I am a web developer. I love to work with PHP, Laravel, and JavaScript.',
    'email' => 'enamul.iu91@gmail.com'
]);
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::resources([
    'jobs' => JobController::class, // Jobs routes controller
    'employers' => EmployerController::class // Employers routes controller
]);

// Auth
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);