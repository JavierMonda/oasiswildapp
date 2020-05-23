<?php

namespace App\Http\Controllers;

use App\Formulario;
use Illuminate\Http\Request;
use App\Encuesta;
use App\Foto;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuestas=Encuesta::all();
        $fotos=Foto::all();
        $formularios=Formulario::orderBy('id','DESC')->paginate(15);
        return view('formularios.index', compact('encuestas','fotos','formularios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formularios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formulario = new Formulario;
        $formulario->live = $request->input('live');
        $formulario->language = $request->input('language');
        $formulario->name = $request->input('name');
        $formulario->email = $request->input('email');
        $formulario->children = $request->input('children');
        $formulario->age = $request->input('age');
        $formulario->conditionChild = $request->input('conditionChild');
        $formulario->condition1 = $request->input('condition1');
        $formulario->condition2 = $request->input('condition2');
        $formulario->save();

        echo "<script>setTimeout(function(){ window.location.href = 'http://localhost:8000/formularios/sealion'; }, 3000);</script>";
        return view('encuestas.restaurants.gracias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function show(Formulario $formulario)
    {
        $formularios=Formulario::find($id);
        return  view('show',compact('formularios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulario $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulario $formulario)
    {
        //
    }
}
