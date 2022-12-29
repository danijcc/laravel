<?php
// 7 metodos rest, index, create, store, show, edit, update, delete/destroy
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\SaveProjectRequest;


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
        return view('projects.create',[
            'project' => new Project
        ]);
    }
  
    public function store(SaveProjectRequest $request)
    {
       
        
        Project::create( $request->validated() );

        return redirect()->route('projects.index')->with('status','El  proyecto fue creado con exito');
    }

    public function edit(Project $project)
    {
        return view('projects.edit',[
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated()); 

        return redirect()->route('projects.show', $project)->with('status','El proyecto fue actualizado con exito');
    }
    
    public function destroy(Project $project)
    {
        $project->delete(); 

        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con exito.');

    }
}
