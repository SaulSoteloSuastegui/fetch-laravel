<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>{{ config('app.name', 'Laravel') }}</title>
 
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">

<script src="{{ asset('js/jquery.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
 
        <div class="jumbotron text-center">
            <h1>My First Bootstrap Page</h1>
            <p>Resize this responsive page to see the effect!</p>
        </div>
        <header>
    <nav><ul>
        <li><a href="{{route('welcome')}}">Home</a></li>
        <li><a href="{{route('cursos.index')}}">Cursos</a></li>
        <li><a href="{{route('cursos.create')}}">Registrar</a></li>
        <li><a href="">Nosotros</a></li>
 
</nav></ul>
    </header>
   
        @yield('content')
 
 
</body>

@yield('jsagenda')
</html>