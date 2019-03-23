@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <h2>Blogs</h2>   
        @if(count($posts) > 0)
            @foreach($posts as $post) 
                <div class="card">
                    {{-- with show() you can fetch the data from the database --}}
                    {{--    ProcesController: show() will use the id in this href with find()--}}
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </div>
            @endforeach
            <br>
            {{$posts->links()}}
        @else 
        <p>Sorry Sorry No Posts found</p>
        @endif
</div>
@endsection