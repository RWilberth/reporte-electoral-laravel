<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{secure_asset('css/libraries.css')}}">  
        <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" >-->
        @yield('styles') 
        
    </head>
    <body>
        @include('shared.header')
        <div class="content">
            @yield('content')  
        </div>

        <script src="{{secure_asset('js/libraries.js')}}" type="text/javascript"></script>
        @yield('scripts')
    </body>
</html>
