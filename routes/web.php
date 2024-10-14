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
    // validate the form
    request()->validate([
        'title' => 'required',
        'description' => 'required',
        'salary' => 'required',
        'type' => 'required',
        'location' => 'required'
    ]);

    // create the job
    $job = new Job();
    $job->title = request('title');
    $job->description = request('description');
    $job->salary = request('salary');
    $job->status = request('type');
    $job->location = request('location');
    $job->employer_id = 1;
    $job->save();

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

