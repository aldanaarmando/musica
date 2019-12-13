<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;
use Session;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Database\Eloquent;
class AlumnoController extends Controller
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
        $alumnos=Alumno::all();
        return view('alumno.index',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.create');
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
        'id_alumno'=>'required',
        'ci'=>'required',
        'nombre'=>'required',
        'apellido_pat'=>'required',
        'apellido_mat'=>'required',
        'fecha_nac'=>'required',
        'genero'=>'required',
        'telefono'=>'required',
    ]);
   Alumno::create($request->all());
  
       Session::flash('message','alumno registrado correctamente');
       return redirect()->route('alumno.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        return view('alumno.edit',compact ('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'id_alumno'=>'required',
            'ci'=>'required',
            'nombre'=>'required',
            'apellido_pat'=>'required',
            'apellido_mat'=>'required',
            'fecha_nac'=>'required',
            'genero'=>'required',
            'telefono'=>'required',
        ]);
           $alumno->update($request->all());
                   Session::flash('message','alumno editado correctamente');
           return redirect()->route('alumno.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        Session::flash('message','Registro eliminado correctamente');
return redirect()->route('alumno.index');
    }
}
