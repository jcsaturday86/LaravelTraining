<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        return view('students.view'); 
    }


    public function create(Request $request)
    {
        session()->flash('success', 'Student added successfully!');
        return redirect()->route('students');
    }
}
