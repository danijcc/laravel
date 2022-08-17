  {{-- Contenido repetible en todas las plantillas en este caso traemos con
    @extends(layout) todo el contenido de la plantilla o vista layout --}}
    @extends('layout')
    {{-- implementamos la directiva @yield("") aqui a travez de @section('content')
    este contenido sera unico para cada web y dinamico para la directiva en el archivo
    layout --}}
    @section('title','Portfolio')
    @section('content')
        <h1>Portfolio</h1> 
        <ul>
          {{-- aca declaramos un if para obtener una respuesta en el caso que el array
           este vacio y no haya elementos para mostrar o mejor aun lo podemos hacer con 
           un isset = si existe
            @isset($portfolio)

              @else
              <li> No hay proyectos para mostrar</li> 
            @endisset
           --}}
          
              {{-- 1.- aca recorremos el array con @foreach que nos pasas la ruta web 
              portfolio mediante el metodo compact o con un forelse 
               2.-la variable loop<pre>{{var_dump($loop)}}</pre>  nos permite ver la iteracion
              del ciclo que estamos utlilizando entre otros detalles tambie podemos usar 
              <pre>{{ $loop->last ? 'Es el ultimo':''}}</pre>si queremos preguntar si el
               ultimo <pre>{{ $loop->first ? 'Es el primero':''}}</pre> si queremos preguntar
               si el primero --}}
              @forelse($portfolio as $portfolioItem)
                  <li> {{$portfolioItem['title']}}  </li>
              @empty
                  <li> No hay proyectos para mostrar</li> 
              @endforelse
            
         </ul>
     @endsection
    
                  

      
              
       