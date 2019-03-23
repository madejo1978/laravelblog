@extends('layouts.app')

@section('content')
    <h1>Edit a Blog</h1>   

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>   
    </div>
@endif

<div class="jumbotron">
    <form method="POST" action="/posts/{{$post->id}}">
       {{-- 
         method_field('PATCH') creates a "hidden input", php artisan route:list 
       csrf_field()  
      
       shorter syntax --}} 
       @method('PATCH')
       @csrf 
       
        <div class="form-group">
            <input type="text" name="title" value="{{ $post->title }}">    
        </div>
        <div class="form-group">
            <textarea name="body" cols="100" rows="10">{{ $post->body }}</textarea> 
        </div>
        <div>
                <a href="/posts" class="btn btn-primary">Go Back</a>
            <button type="submit" class="btn btn-secondary">Update this Blog</button>
        </div>
    </form>
</div>
        
@endsection

 