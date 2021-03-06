<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;
use Session;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Database\Eloquent;
class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       $this->middleware('auth');
    }
    
    public function index()
    {
        $cursos=Curso::all();
        return view('curso.index',compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_curso'=>'required',
            'nombre_curso'=>'required',
            'nivel'=>'required',
            'id_profesor'=>'required',
        ]);
       Curso::create($request->all());
      
           Session::flash('message','curso registrado correctamente');
           return redirect()->route('curso.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        return view('curso.edit',compact ('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'id_curso'=>'required',
            'nombre_curso'=>'required',
            'nivel'=>'required',
            'id_profesor'=>'required',
        ]);
           $aula->update($request->all());
                   Session::flash('message','curso editado correctamente');
           return redirect()->route('curso.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        Session::flash('message','Registro eliminado correctamente');
return redirect()->route('curso.index');
    }
}
