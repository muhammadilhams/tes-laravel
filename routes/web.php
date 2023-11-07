<?php

use App\Http\Controllers\BuahController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', function (){
    return view('home',[
        'name' => 'yan',
        'role' => 'mahasiswa',
        'fakultas' => ['mipa', 'farmasi', 'teknik']
    ]);
  
});

Route::get('/students',[StudentController::class, 'index']);
Route::get('/class',[ClassController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/basic', function(){
    return ('ini adalah route basic');
});

// Route::get('/dashboard',[BuahController::class, 'index']);
Route::get('/dashboard', [MahasiswaController::class, 'index']);


