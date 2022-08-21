<?php
// este controlador se creo con el siguiente comando
// php artisan make:controller PortfolioController -i
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
    //    pasamos con la funcion compact el array portfolio siempre y cuando 
    //    el nombre de la variable y el valor de la variable sean el mismo
        $portfolio = [
            ['title' => 'Proyecto #1'],
            ['title' => 'Proyecto #2'],
            ['title' => 'Proyecto #3'],
            ['title' => 'Proyecto #4'],
        ];
    //   aca retornamos la vista portafolio por medio del metodo __invoke
          return view('portfolio', compact('portfolio'));
    }
}
