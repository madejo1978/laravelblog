@extends('layouts.app') {{-- name of the folder.name of the file --}}

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1> {{-- title is specified in PagesController.php --}}
        <p>Laravel from scratch</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>
@endsection