<!DOCTYPE html>
<html lang="en">
<head>
    {{-- para agregar contenido dinamico usamos la directiva @yield('') podemos 
    agregar varios en la misma pagina y para implementarlo lo hacemos con 
    @section(<nombre especificado>) y al finalizar @endsection dentro de la misma 
    escribiremos el contenido unico de la web--}}
    <title> @yield('title', 'Aprendible')</title>
    <style>
       .active a {
        color: red;
        text-decoration: none;
       } 
    </style>
</head>
<body>
    {{-- En el archivo layout va el menu de navegacion entre cualquier otro 
    contenido que queramos repetir en otras paginas o vistas 
    posteriormente para implementar esto en alguna otra pagina o vista usamos
    la directiva de blade @extends('layout')  --}}
    @include('partials.nav')
    {{-- mensajes flash --}}
    @include('partials.session-status')
    {{-- para agregar contenido dinamico usamos la directiva @yield('') podemos 
    agregar varios en la misma pagina y para implementarlo lo hacemos con 
    @section(<nombre especificado>) y al finalizar @endsection dentro de la misma 
    escribiremos el contenido unico de la web--}}
    @yield('content')
</body>
</html>