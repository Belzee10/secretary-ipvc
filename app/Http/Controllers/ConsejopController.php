<?php

namespace App\Http\Controllers;

use App\Consejopopular;
use App\Municipio;
use Illuminate\Http\Request;

class ConsejopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consejosp = Consejopopular::all();

        return view('consejosp.index')->with('consejosp',$consejosp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = Municipio::all();

        return view('consejosp.create')->with('municipios',$municipios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consejop = new Consejopopular($request->all());
        $consejop->save();

        return redirect()->route('consejosp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consejopopular  $consejopopular
     * @return \Illuminate\Http\Response
     */
    public function show(Consejopopular $consejopopular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consejopopular  $consejopopular
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consejop = Consejopopular::find($id);
        $municipios = Municipio::all();

        return view('consejosp.edit')->with('consejop',$consejop)->with('municipios',$municipios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consejopopular  $consejopopular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $consejop = Consejopopular::find($id);
        $consejop->fill($request->all());
        $consejop->save();

        return redirect()->route('consejosp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consejopopular  $consejopopular
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consejop = Consejopopular::find($id);
        $consejop->delete();

        return redirect()->route('consejosp.index');
    }
}
