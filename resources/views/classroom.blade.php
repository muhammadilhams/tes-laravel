@extends('layouts.main')
@section('title', 'student')

 @section('content')
     
 <h1>ini adalah halaman class</h1>
 {{-- <h2>{{$studentList}}</h2> --}}
 <table class="table">
    <tr>
        <th>nama kelas</th>
    </tr>
    @foreach ($classList as $data)
    <tr>
        
        <td>
            {{$data->name}}
        </td>
        
        
    </tr>
    @endforeach
 </table>
     
 @endsection