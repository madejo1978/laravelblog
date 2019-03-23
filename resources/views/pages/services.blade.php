@extends('layouts.app') 

@section('content')
    <div class="jumbotron">
        <h1>{{$title}}</h1> {{-- output of an array --}}
        <p>This is the services page</p>

        @if(count($services) > 0) {{-- if $services has more than one variable --}}

        <ul class="list-group">
        @foreach($services as $outputServices)
            <li class="list-group-item">{{$outputServices}}</li>
        @endforeach
        </ul>
    </div>
    @endif
@endsection
