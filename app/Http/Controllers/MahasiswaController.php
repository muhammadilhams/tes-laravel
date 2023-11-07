<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function index(){
        $mahasiswa = Mahasiswa::all();
        return view('student', ['mahasiswaList'=>$mahasiswa]);
    }
}
