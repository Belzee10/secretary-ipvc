<?php

namespace App\Http\Controllers;

use App\Grado;
use App\Unidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_unidad)
    {
        Session::put('unidad_id',$id_unidad);

        $unidad = Unidad::find($id_unidad);
        $grados = Grado::where('unidad_id','=',$id_unidad)->get();

        return view('grados.index')->with('grados',$grados)->with('unidad',$unidad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_unidad)
    {
        $unidad = Unidad::find($id_unidad);
        return view('grados.create')->with('unidad', $unidad);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_unidad)
    {
        $unidad = Unidad::find(Session::get('unidad_id'));
        $grado = new Grado($request->all());
        $grado->unidad_id = $unidad->id;
        $grado->save();

        return redirect()->route('grados.index',$unidad->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function show(Grado $grado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unidad = Unidad::find(Session::get('unidad_id'));
        $grado = Grado::find($id);

        return view('grados.edit')->with('unidad',$unidad)->with('grado',$grado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $unidad = Unidad::find(Session::get('unidad_id'));
        $grado = Grado::find($id);
        $grado->fill($request->all());
        $grado->save();

        return redirect()->route('grados.index',$unidad->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unidad = Unidad::find(Session::get('unidad_id'));
        $grado = Grado::find($id);
        $grado->delete();

        return redirect()->route('grados.index',$unidad->id);
    }
}
