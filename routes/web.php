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
    $jobs = Job::with('employer')->latest()->paginate(15);
    return view('jobs.index', [
        'jobs' => $jobs                
    ]);
});

Route::get('/jobs/create', function(){
    return view('jobs.create');
});

Route::get('/jobs/{id}', function($id){

    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function(){
    Job::create([
        'title' => request('title'),
        'description' => request('description'),
        'salary' => request('salary'),
        'status' => request('status'),
        'location' => request('location'),
        'employer_id' => 6
    ]);

    return redirect('/jobs');
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

