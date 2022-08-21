<?php
// 7 metodos rest, index, create, store, show, edit, update, delete/destroy
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
