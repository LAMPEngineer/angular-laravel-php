<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{



/**
 *  To list student record
 * 
 * 
 * 
 * @return array 
 * 
 */ 
    public function index()
    {
    	$students = Student::orderBy('id','DESC')->get();
    	return view('students', compact('students'));
    }


/**
 *  To add student record
 * 
 * @param $request Request
 * 
 * @return json response
 * 
 */ 
    public function addStudent(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required|email|max:255',
            'phone'     => 'required|digits:10'

        ]);

    	$student = new Student();
    	$student->firstname = $request->firstname;
    	$student->lastname = $request->lastname;
    	$student->email = $request->email;
    	$student->phone = $request->phone;
    	$student->save();
    	return response()->json($student);
    }



/**
 *  To edit student record
 * 
 * @param $request Request
 * 
 * @return json response
 * 
 */ 
    public function editStudent(Request $request)
    {


    }



}
