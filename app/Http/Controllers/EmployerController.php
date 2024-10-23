<?php

namespace App\Http\Controllers;

use App\Models\Employer;


class EmployerController extends Controller
{
    public function index()
    {
        return view('employers', [
            'employers' => Employer::all()
        ]);
    }

    public function show(Employer $employer)
    {
        return view('employer', ['employer' => $employer]);
    }
}
