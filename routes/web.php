<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employer;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployerController;


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
