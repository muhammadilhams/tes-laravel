<?php

namespace App\Http\Controllers;

use App\Models\Buah;
use Illuminate\Http\Request;

class BuahController extends Controller
{
    function index(){
        $buah = Buah::all();
        return view('dashboard',['buahList'=>$buah]);

    }
}
