<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Foto;

class FotografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fotos=Foto::all();
        return view('fotografia.index',compact('fotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fotografia.subida');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = new Foto;
        $foto->codigo = $request->input('codigo');
        $codigo = $request->input('codigo');
        
        if ($request->hasFile('archivo')) {
            $nombreImg = $request->file('archivo')->getClientOriginalName();
            $archivo = $request->file('archivo')->storeAs('/img/'. $codigo, $nombreImg);
            $foto->archivo = $archivo;
        }else {
            $foto->archivo = '/img/Imagen_no_disponible.svg.png';
        }
        $foto->save();

        return redirect()->action('FotografiaController@index');
    }

    public function download(Request $request)
    {
        $codigo = $request->input('codigo');
        $archivo = DB::table('fotos')
                    ->where('fotos.codigo','=',$codigo)
                    ->select('fotos.archivo')
                    ->distinct()
                    ->get();
        foreach ($archivo as $a)
            $file = storage_path().'/app/'.$a->archivo;

        $confirmacion = DB::table('fotos')
                    ->where('fotos.codigo', '=',$codigo)
                    ->get();
        $confirmacion->confirmado = "Si";
        
        return response()->download($file);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
