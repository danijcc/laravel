
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
            {{-- mediante una funcion evaluamos la siguiente exprecion --}}
            <li class="{{ setActive('home') }}"><a href="{{route('home')}}">@lang('Home')</a></li>
            <li class="{{ setActive('about') }}"><a href="{{route('about')}}">@lang('About')</a></li>
            <li class="{{ setActive('projects.*') }}"><a href="{{route('projects.index')}}">@lang('Projects')</a></li>
            <li class="{{ setActive('contact') }}"><a href="{{route('contact')}}">@lang('Contact')</a></li>
           
        </ul>
    </nav>