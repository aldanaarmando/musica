<?php

namespace App\Http\Controllers;

use App\Horario;
use Illuminate\Http\Request;
use Session;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Database\Eloquent;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios=Horario::all();
        return view('horario.index',compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horario.create');
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
            'id_horario'=>'required',
            'id_aula'=>'required',
            'id_curso'=>'required',
            'dias'=>'required',
            'horario'=>'required',
        ]);
       Horario::create($request->all());
      
           Session::flash('message','horario registrado correctamente');
           return redirect()->route('horario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show(Horario $horario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit(Horario $horario)
    {
        return view('horario.edit',compact ('horario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        $request->validate([
            'id_horario'=>'required',
            'id_aula'=>'required',
            'id_curso'=>'required',
            'dias'=>'required',
            'horario'=>'required',
        ]);
           $horario->update($request->all());
                   Session::flash('message','chorario editado correctamente');
           return redirect()->route('chorario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horario $horario)
    {
        $horario->delete();
        Session::flash('message','Registro eliminado correctamente');
return redirect()->route('horario.index');
    }
}
