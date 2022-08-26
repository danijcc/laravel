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
    <nav>
        {{-- con un request podemos ver un previo de lo que esta pasando detras 
        de todo es similar a un var dump
        <pre>{{request()}}</pre> tex plano
        <pre>{{dump(request())}}</pre> format json
        <pre>{{request()->url()}}</pre> nos muestra la url completa
        <pre>{{request()->path()}}</pre> nos muestra la url interna
        <pre>{{dump(request()->routeIs('home'))}}</pre> nos permite comparar la ruta
        --}}
        
        <ul>
            {{-- mediante un operador ternario ? evaluamos la expresion para activar los link  --}}
            <li class="{{request()->routeIs('home') ? 'active' : ''}}"><a href="/">Home</a></li>
            <li class="{{request()->routeIs('about') ? 'active' : ''}}"><a href="/about">About</a></li>
            <li class="{{request()->routeIs('portfolio') ? 'active' : ''}}"><a href="/portfolio">Portfolio</a></li>
            <li class="{{request()->routeIs('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>
           
        </ul>
    </nav>
    {{-- para agregar contenido dinamico usamos la directiva @yield('') podemos 
    agregar varios en la misma pagina y para implementarlo lo hacemos con 
    @section(<nombre especificado>) y al finalizar @endsection dentro de la misma 
    escribiremos el contenido unico de la web--}}
    @yield('content')
</body>
</html>