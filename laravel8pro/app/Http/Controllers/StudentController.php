<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
    	$student = Student::orderBy('id','DESC')->get();
    	return view('students', compact('students'));
    }
}
