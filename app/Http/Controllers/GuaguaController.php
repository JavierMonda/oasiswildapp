<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guagua;

class GuaguaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guaguas=Guagua::orderBy('id','DESC')->paginate(15);
        return view('guaguas.index',compact('guaguas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guaguas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guagua = new Guagua;
        $guagua->guagua = $request->input('guagua');
        $guagua->language = $request->input('language');
        $guagua->question1 = $request->input('question1');
        $guagua->question2 = $request->input('question2');
        $guagua->question3 = $request->input('question3');
        $guagua->question4 = $request->input('question4');
        $guagua->question5 = $request->input('question5');
        $guagua->question6 = $request->input('question6');
        $guagua->comment = $request->input('comment');
        $guagua->save();

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
