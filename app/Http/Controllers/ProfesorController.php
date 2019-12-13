<?php

namespace App\Http\Controllers;

use App\Profesor;
use Illuminate\Http\Request;
use Session;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Database\Eloquent;
class ProfesorController extends Controller
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
        $profesores=Profesor::all();
        return view('profesor.index',compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesor.create');
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
            'id_profesor'=>'required',
            'ci'=>'required',
            'nombre'=>'required',
            'apellido_pat'=>'required',
            'apellido_mat'=>'required',
            'fecha_nac'=>'required',
            'genero'=>'required',
            'telefono'=>'required',
            'id_cargo'=>'required',
        ]);
       Profesor::create($request->all());
      
           Session::flash('message','profesor registrado correctamente');
           return redirect()->route('profesor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        return view('profesor.edit',compact ('profesor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesor $profesor)
    {
        $request->validate([
            'id_profesor'=>'required',
            'ci'=>'required',
            'nombre'=>'required',
            'apellido_pat'=>'required',
            'apellido_mat'=>'required',
            'fecha_nac'=>'required',
            'genero'=>'required',
            'telefono'=>'required',
            'id_cargo'=>'required',
        ]);
           $profesor->update($request->all());
                   Session::flash('message','profesor editado correctamente');
           return redirect()->route('profesor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        Session::flash('message','Registro eliminado correctamente');
return redirect()->route('profesor.index');
    }
}
