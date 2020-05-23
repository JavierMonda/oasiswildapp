<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encuesta;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuestas=Encuesta::orderBy('id','DESC')->paginate(15);
        return view('encuestas.oasis',compact('encuestas')); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('encuestas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $encuesta = new Encuesta;
        $restaurant = $request->input('restaurant');
        if($restaurant == 'Oasis'){
            $encuesta->restaurant = 'Oasis';
        }
        if($restaurant == 'Patio') {
            $encuesta->restaurant = 'Patio';
        }
        if($restaurant == 'Leones') {
            $encuesta->restaurant = 'Leones';
        }
        $encuesta->language = $request->input('language');
        $encuesta->question1 = $request->input('question1');
        $encuesta->question2 = $request->input('question2');
        $encuesta->question3 = $request->input('question3');
        $encuesta->question4 = $request->input('question4');
        $encuesta->question5 = $request->input('question5');
        $encuesta->comment = $request->input('comment');
        $encuesta->save();

        echo "<script>setTimeout(function(){ window.location.href = 'https://oasiswildlifefuerteventura.com'; }, 3000);</script>";
        return view('encuestas.restaurants.gracias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encuestas=Encuesta::find($id);
        return  view('show',compact('encuestas'));
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
        //
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
