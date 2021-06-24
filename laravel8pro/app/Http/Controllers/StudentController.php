<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
    	$students = Student::orderBy('id','DESC')->get();
    	return view('students', compact('students'));
    }

    public function addStudent(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required',
            'phone'     => 'required'

        ]);

    	$student = new Student();
    	$student->firstname = $request->firstname;
    	$student->lastname = $request->lastname;
    	$student->email = $request->email;
    	$student->phone = $request->phone;
    	$student->save();
    	return response()->json($student);
    }
}
