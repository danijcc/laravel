  {{-- Contenido repetible en todas las plantillas en este caso traemos con
    @extends(layout) todo el contenido de la plantilla o vista layout --}}
    @extends('layout')
    {{-- implementamos la directiva @yield("") aqui a travez de @section('content')
    este contenido sera unico para cada web y dinamico para la directiva en el archivo
    layout --}}
    @section('title','Contact')
    @section('content')
    <h1>Contact</h1>
    @endsection
