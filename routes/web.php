<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
------------------------------------------------------------------
[Route] las rutas = son las url de entrada de nuestra aplicacion.
------------------------------------------------------------------
::get = es el método que usamos para 'capturar' las peticiones que 
        son realizadas usando el verbo 'GET' de HTTP hacia una URL 
        concreta.
-------------------------------------------------------------------
[function ()] funcion anonima o closure = lo que retornamos por esta 
funcion es lo que vera finalmente el usuario.
-------------------------------------------------------------------
'/' = nombre de la ruta definida en este caso es la raiz
-------------------------------------------------------------------
 Podemos manejar peticiones de tipos post para el envio de 
 formularios.

 Route::post()//form action="POST"
*/

//------------------------------------------------------------------
//basicamente definimos url y respondemos con una funcion.
//------------------------------------------------------------------

/*
Route::get('contactame', function(){
    return "Seccion de contactos";
})->name('contactos');
*/

//para darle nombre a las rutas llamamos el metodo name y le pasamos
// el nombre que queremos

//------------------------------------------------------------------
//en el home agrego rutas que vaya a la pagina deseada 
//------------------------------------------------------------------

/*
 Route::get('/', function(){
    echo "<a href='" . route('contactos') . "'>Contactos 1</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 2</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 3</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 4</a><br>";
 });
 */

//------------------------------------------------------------------
//pasar parametros por las url en este caso el parametro nombre
//si no pasamos ningun parametro colocamos un signo ? en el parametro
//nombre y un valor por defecto a la variable de la funcion
//------------------------------------------------------------------

/*
Route::get('saludos/{nombre?}',function($nombre = "Invitado"){
    return "Saludos " . $nombre;
});
 */
//--------------------------------------------------------------------
/*
resources->views

view =la funcion view se utiliza para regresar las plantillas de blade
      recibidas por parametro view('parametro')
    
---------------------------------------------------------------------                           
---------------------------opcion 1----------------------------------
->with('nombre', $nombre);= enviar la variable nombre a la vista por 
                           medio del metodo with 
                           (nombre variable, valor de la variable)  

Route::get('/', function(){
    $nombre = "Dani";
     return view('home')->with('nombre', $nombre);
})->name('home');

---------------------------------------------------------------------                           
---------------------------opcion 2----------------------------------
lo podemos pasar como segundo parametro de la funcion view en forma de 
array

Route::get('/', function(){
    $nombre = "Dani";
     return view('home', ['nombre' => $nombre]);
})->name('home');
    
---------------------------------------------------------------------                           
---------------------------opcion 3----------------------------------
tambien podemos pasarlo con la funcion compact siempre y cuando 
el nombre de la variable y el valor de la variable sean el mismo

Route::get('/', function(){
    $nombre = "Dani";
        return view('home' , compact('nombre');
})->name('home');

---------------------------------------------------------------------                           
---------------------------opcion 4----------------------------------
hacerlo mediante vistas con metodo view

Route::view('/',"home", ['nombre' => 'Dani'] );
*/

/*
 pasamos el siguiente Aray de inf mediante la funcion compact a la vista
 portfolio 
*/

Route::view('/','home')->name('home');
Route::view('/about', 'about')->name('about');

//pasamos la url portfolio como primer parametro y luego pasamos el controlador 
// que se va a ejecutar cuando accedamos a la url como segundo parametro 
//para acceder al metodo @index de portfolio controller lo hacemos con un @
Route::get('/portfolio','PortfolioController@index')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');
//Route::resource('projects','PortfolioCotroller');

//video 13