<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    function index(){
        $classroom = ClassRoom::all();
           return view('classroom', ['classList'=>$classroom]);
        }
}
