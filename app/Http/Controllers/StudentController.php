<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){
    $student = Student::all();
       return view('student', ['studentList'=>$student]);
    }
}
