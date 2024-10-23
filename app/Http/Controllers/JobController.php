<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(15);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
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
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        // validate the job
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'salary' => 'required',
            'type' => 'required',
            'location' => 'required'
        ]);

        // update the job
        $job->update([
            'title' => request('title'),
            'description' => request('description'),
            'salary' => request('salary'),
            'status' => request('type'),
            'location' => request('location')
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }

}
