@extends('layouts.app')

@section('content')
    <br>
    <h1>{{$post->title}}</h1>
    <div>
        {{-- without formatting --}}
        {{$post->body}}
         
        {{-- with formatting
            {!! nl2br( e( $post->body ) ) !!}  --}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small> 
    <br><br>


    
    <form method="POST" class="" action="/posts/{{$post->id}}">
     
        {{-- {{ method_field('DELETE') }} --}}   {{-- creates a "hidden input", php artisan route:list --}}
        {{--   {{ csrf_field() }} --}}   
        
        {{-- shorter syntax: --}}
           @method('DELETE')
           @csrf
          <div>
                <a href="/posts" class="btn btn-primary">Go Back</a>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
                <button type="submit" class="btn btn-danger float-right">Delete</button>
           </div>
       </form>
    
@endsection