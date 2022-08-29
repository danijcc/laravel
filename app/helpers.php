<?php

function setActive($routeName)
{   //evaluar la exprecion mediante un operador ternario ?
    return request()->routeIs($routeName) ? 'active' : '';
}


// en el archivo composer.json debemos decirle que cargue este archivo al momento de 
// arrancar el framework
