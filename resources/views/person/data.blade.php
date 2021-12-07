@extends("layouts.app")
    @section('content')
    <h1>Nama nama mahasiswa</h1>
    <ol>
        @if($names)
            @foreach($names as $name)
                <li>{{$name}}</li>
            @endforeach
        @endif
    </ol>
    @stop