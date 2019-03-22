@extends('layouts.app') 

@section('content')
    <div class="jumbotron">    
        <h1>{{$title}}</h1>
        <h6><?php echo $title ?></h6>     
        <p>This is the about page</p>
    </div>
    @endsection
