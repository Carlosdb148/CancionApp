<?php

namespace App\Http\Controllers;

use App\Models\Cancion;
use Illuminate\Http\Request;

class CancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cancion = Cancion::all();
        return view('cancion.index', ['activeCancion' => 'active', 'cancion' => $cancion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cancion.create', ['activeCancion' => 'active', 'subTitle' => 'Cancion - Create', 'table' =>'cancion']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cancion = new Cancion($request->all());
        $cancion->save();
        return redirect('cancion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function show(Cancion $cancion)
    {
        return view('cancion.show', ['activeCancion' => 'active', 'cancion' => $cancion, 'subTitle' => 'Cancion - Show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function edit(Cancion $cancion)
    {
        return view('cancion.edit', ['activeCancion' => 'active', 'cancion' => $cancion, 'subTitle' => 'Cancion - Edit']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cancion $cancion)
    {
        $cancion->update($request->all());
        return redirect('/cancion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cancion $cancion)
    {
        $cancion->delete();
        return redirect('/cancion');
    }
}
