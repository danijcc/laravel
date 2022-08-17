    {{-- Contenido repetible en todas las plantillas en este caso traemos con
    @extends(layout) todo el contenido de la plantilla o vista layout --}}
    @extends('layout')
     {{-- implementamos la directiva @yield("") aqui a travez de @section('content')
    este contenido sera unico para cada web y dinamico para la directiva en el archivo
    layout --}}
    @section('title','Home')
        {{-- Home --}}
    @section('content')
    <h1>About</h1>
    @endsection
    {{--

       pasar datos a las vistas  
        1.- es importante que las vistas tengan la minima logica posible solo imprimir
    variables, hacer estructuras de control ejmp: if else hacer loop.
    2- podemos imprimir una variable utilizando {{}} ya que proteje de inyeccion
    de codugo en vez de echo

    Bienvenido@ <?php echo $nombre  ?? "Invitado"?>
    Bienvenido@ {{$nombre  ?? "Invitado"}} 

    --}}
