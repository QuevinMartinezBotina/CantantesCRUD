<?php

namespace App\Http\Controllers;

use App\Models\Cantante;
use Illuminate\Http\Request;

class CantanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 0;
        $cantantes = Cantante::all();
        return view('cantante.index',compact('cantantes','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cantante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name_cantante' => 'required',
            'genero' => 'required',
            'pais' => 'required',
        ]);

        Cantante::create($request->all());
        return redirect()->route('cantante.index')->with('success', 'Creado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cantante  $cantante
     * @return \Illuminate\Http\Response
     */
    public function show(Cantante $cantante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cantante  $cantante
     * @return \Illuminate\Http\Response
     */
    public function edit(Cantante $cantante)
    {
        return view('cantante.edit',compact('cantante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cantante  $cantante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cantante $cantante)
    {
        request()->validate([
            'name_cantante' => 'required',
            'genero' => 'required',
            'pais' => 'required',
        ]);

        $cantante->update($request->all());

        return redirect()->route('cantante.index')->with('success', 'Actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cantante  $cantante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cantante $cantante)
    {
        $cantante->delete();

        return redirect()->route('cantante.index');
    }
}
