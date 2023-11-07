@extends('layouts.utama')
@section('content')
<h1 class="bg-danger">Hello, world!</h1>

<table class="table">
    <tr>
        <th>buah</th>
    </tr>
    <tr>
        @foreach ($buahList as $item)
            <td>{{$item}}</td>
        @endforeach
    </tr>
</table>

@endsection


