@extends('layouts.main')
@section('title', 'student')

 @section('content')
     
 <h1>ini adalah halaman student</h1>
 <table>
    <tr>
        <th>nama</th>
    
    </tr>
    <tr>
        @foreach ($mahasiswaList as $value)
            <td>{{$value->name}}</td>
        @endforeach
    </tr>
 </table>
 
 
     
 @endsection