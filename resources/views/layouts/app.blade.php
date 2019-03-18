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
                @yield('content')
        </div>
    </body>
</html>
