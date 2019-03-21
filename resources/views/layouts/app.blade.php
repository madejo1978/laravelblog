<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">{{-- load from the public asset-folder (compiled bootstrap) --}}
        <title>{{config('app.name','standard-title does not work, check it in .env')}}</title> {{-- you can change it in .env under APPNAME--}} 
    </head>

    <body>
        @include('inc.navbar') {{-- inc/navbar --}}
        
        <div class="container">   
            @include('inc.messages')    
            @yield('content')
        </div>

       
        <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
    </body>
</html>
