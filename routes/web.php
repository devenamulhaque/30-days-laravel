<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home', [
        'name' => 'John Doe',
        'bio' => 'I am a web developer. I love to work with PHP, Laravel, and JavaScript.',
        'email' => 'enamul.iu91@gmail.com'
    ]);
});

Route::get('/jobs', function(){
    // $jobs = Job::all();

    // dd($jobs[0]->salary);
    return view('jobs', [
        'jobs' => Job::all()                 
    ]);
});

Route::get('/jobs/{id}', function($id){

    $job = Job::find($id);

    return view('job', ['job' => $job]);
    
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

