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


    <form method="POST" action="/posts/{{$post->id}}">
       {{-- {{ method_field('PATCH') }} --}}   {{-- creates a "hidden input", php artisan route:list --}}
       {{-- {{ csrf_field() }} --}}
       
       {{-- shorter syntax --}}
       @method('PATCH')
       @csrf
       
        <div class="form-group">
            <input type="text" name="title" placeholder="Title" value="{{ $post->title }}">    
        </div>
        <div class="form-group">
            <textarea name="body" id="editor1" cols="30" rows="10" placeholder="Text">{{ $post->body }}</textarea> {{-- id is used for  --}}
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Update this Blog</button>
        </div>
    </form>
        
@endsection

 