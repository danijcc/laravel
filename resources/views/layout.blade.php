<!DOCTYPE html>
<html lang="en">
<head>
    {{-- para agregar contenido dinamico usamos la directiva @yield('') podemos 
    agregar varios en la misma pagina y para implementarlo lo hacemos con 
    @section(<nombre especificado>) y al finalizar @endsection dentro de la misma 
    escribiremos el contenido unico de la web--}}
    <title> @yield('title', 'Aprendible')</title>
</head>
<body>
    {{-- En el archivo layout va el menu de navegacion entre cualquier otro 
    contenido que queramos repetir en otras paginas o vistas 
    posteriormente para implementar esto en alguna otra pagina o vista usamos
    la directiva de blade @extends('layout')  --}}
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    {{-- para agregar contenido dinamico usamos la directiva @yield('') podemos 
    agregar varios en la misma pagina y para implementarlo lo hacemos con 
    @section(<nombre especificado>) y al finalizar @endsection dentro de la misma 
    escribiremos el contenido unico de la web--}}
    @yield('content')
</body>
</html>