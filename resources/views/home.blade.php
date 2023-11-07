@extends('layouts.main')
@section('title', 'home')

 @section('content')
     
 
    <h1>halo, {{$name}}</h1>
    <h3>kamu adalalh <b>{{$role}}</b></h3>

    @switch($role)
        @case('admin')
        <p>kamu adalah {{$role}} silahkan klik masuk</p>
        <a href="">{{$role}}</a>
            @break
        @case('mahasiswa')
        <p>kamu adalah {{$role}} silahkan klik masuk</p>
        <a href="">{{$role}}</a>
            @break
        @default
            
    @endswitch 
    


<table class="table">
    <tr>
        <th>no.</th>
        <th>nama</th>
    </tr>
    @foreach ($fakultas as $data)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data}}</td>
    </tr>
     
@endforeach
</table>
@endsection   

    
     

