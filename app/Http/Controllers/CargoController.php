<?php

namespace App\Http\Controllers;

use App\Cargo;
use Illuminate\Http\Request;
use Session;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Database\Eloquent;
class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos=Cargo::all();
     return view('cargos.index',compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargos.create');
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
            'id_cargo'=>'required',
            'nombre_cargo'=>'required',
        ]);
       Cargo::create($request->all());
      
           Session::flash('message','Gasto registrado correctamente');
           return redirect()->route('cargos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        return view('cargos.edit',compact ('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {
        $request->validate([
            'id_cargo'=>'required',
            'nombre_cargo'=>'required',
        ]);
           $cargo->update($request->all());
                   Session::flash('message','cargo editado correctamente');
           return redirect()->route('cargos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        $cargo->delete();
        Session::flash('message','Registro eliminado correctamente');
return redirect()->route('cargos.index');
    }
}
