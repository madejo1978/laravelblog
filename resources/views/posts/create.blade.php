@extends('layouts.app')

@section('content')
    <h1>Create a Blog</h1>   

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" action="/posts">
        {{ csrf_field() }}
        
        <div class="form-group">
            <input type="text" name="title" placeholder="Title">    
        </div>
        <div class="form-group">
            <textarea name="body" id="" cols="30" rows="10" placeholder="Text"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Create a new Blog</button>
        </div>
    </form>
     
@endsection

 