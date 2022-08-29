  {{-- Contenido repetible en todas las plantillas en este caso traemos con
    @extends(layout) todo el contenido de la plantilla o vista layout --}}
    @extends('layout')
    {{-- implementamos la directiva @yield("") aqui a travez de @section('content')
    este contenido sera unico para cada web y dinamico para la directiva en el archivo
    layout --}}
    @section('title','Contact')
    @section('content')
        <h1>Contact</h1>
        {{-- los formularios por defecto utiliza el metodo get para envia los datos lo hace 
        por la url pero podemos cambia a post --}}
        <form method="POST" action="{{ route('contact') }}">
          @csrf
          <input name="name" placeholder="Nombre..."><br>
          <input type="email" name="email" placeholder="Email..."><br>
          <input name="subject" placeholder="Asunto..."><br>
          <textarea name="content" placeholder="Mensaje..."></textarea><br>
          <button>Enviar</button>
        </form>

    @endsection
