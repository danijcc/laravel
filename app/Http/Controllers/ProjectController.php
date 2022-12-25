<?php
// 7 metodos rest, index, create, store, show, edit, update, delete/destroy
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
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

    //   aca retornamos la vista portafolio por medio del metodo __invoke
      return view('projects.index', [
       'projects'=>Project::latest()->paginate()
      ]);
    }

    public function show(Project $project)
    {
        return view('projects.show',[
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }
  
    public function store()
    {
        $fields = request()->validate([
           
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',

        ]);

        Project::create( $fields );

        return redirect()->route('projects.index');
    }

}
