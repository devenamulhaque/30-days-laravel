<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Employer;


Route::get('/', function () {
    return view('home', [
        'name' => 'John Doe',
        'bio' => 'I am a web developer. I love to work with PHP, Laravel, and JavaScript.',
        'email' => 'enamul.iu91@gmail.com'
    ]);
});

Route::get('/jobs', function(){
    return view('jobs', [
        'jobs' => Job::all()                 
    ]);
});

Route::get('/jobs/{id}', function($id){

    $job = Job::find($id);

    return view('job', ['job' => $job]);
    
});

Route::get('/employers', function(){
    return view('employers', [
        'employers' => Employer::all()
    ]);
});

Route::get('/employers/{id}', function($id){
    $employer = Employer::find($id);
    return view('employer', ['employer' => $employer]);
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

