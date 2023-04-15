<?php

namespace App\Http\Controllers;

use App\Typedoleance;
use Illuminate\Http\Request;

class TypedoleanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typedoleances = Typedoleance::all();
        return view('typedoleances.index',compact('typedoleances'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $typedoleance = new Typedoleance();   
        // $typedoleance->numero = $request['numero'];
        $typedoleance->type = $request['type'];
        $typedoleance->type_en = $request['type_en'];
        $typedoleance->type_ar = $request['type_ar'];
        $typedoleance->numero = $request['numero'];
        $typedoleance->save();// = $request['numero'];
        return redirect()->route('typedoleance.index')->with('success', 'Inséré avec succés ');        
    }


    public function update(Request $request, $typedoleance_id)
    {
        $typedoleance = Typedoleance::find($typedoleance_id);   
        $typedoleance->type = $request['type_edit'];
        $typedoleance->type_en = $request['type_en_edit'];
        $typedoleance->type_ar = $request['type_ar_edit'];
        $typedoleance->numero = $request['numero_edit'];
        $typedoleance->save();
        return redirect()->route('typedoleance.index')->with('success', 'Inséré avec succés ');        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Typedoleance  $typedoleance
     * @return \Illuminate\Http\Response
     */
    public function destroy($typedoleance_id)
    {
        $typedoleance = Typedoleance::find($typedoleance_id);   
        $typedoleance->delete();// = $request['numero'];
        return redirect()->route('typedoleance.index')->with('success', 'Inséré avec succés ');        

    }
}
