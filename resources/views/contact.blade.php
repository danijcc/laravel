  {{-- Contenido repetible en todas las plantillas en este caso traemos con
    @extends(layout) todo el contenido de la plantilla o vista layout --}}
    @extends('layout')
    {{-- implementamos la directiva @yield("") aqui a travez de @section('content')
    este contenido sera unico para cada web y dinamico para la directiva en el archivo
    layout --}}
    @section('title','Contact')
    @section('content')
        <h1>{{ __('Contact')}}</h1>
               
        
        {{-- los formularios por defecto utiliza el metodo get para envia los datos lo hace 
        por la url pero podemos cambia a post --}}
        <form method="POST" action="{{ route('messages.store') }}">
          @csrf
          <input name="name" placeholder="Nombre..." value="{{old('name')}}"><br>
          {!! $errors->first('name','<small>:message</small><br>') !!}

          <input type="email" name="email" placeholder="Email..." value="{{old('email')}}"><br>
          {!! $errors->first('email','<small>:message</small><br>') !!}

          <input name="subject" placeholder="Asunto..."><br>
          {!! $errors->first('subject','<small>:message</small><br>') !!}

          <textarea name="content" placeholder="Mensaje..."></textarea><br>
          {!! $errors->first('content','<small>:message</small><br>') !!}
          <button>@lang('Send')</button>
        </form>
       
    @endsection
