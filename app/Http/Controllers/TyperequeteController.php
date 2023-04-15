<?php

namespace App\Http\Controllers;

use App\Typerequete;
use Illuminate\Http\Request;

class TyperequeteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typerequetes = Typerequete::all();
        return view('typerequetes.index',compact('typerequetes'));
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
        $typerequete = new Typerequete();   
        $typerequete->numero = $request['numero'];
        $typerequete->type = $request['type'];
        $typerequete->type_en = $request['type_en'];
        $typerequete->type_ar = $request['type_ar'];
        $typerequete->save();// = $request['numero'];
        return redirect()->route('typerequete.index')->with('success', 'Inséré avec succés ');        
    }


    public function update(Request $request, $typerequete_id)
    {
        $typerequete = Typerequete::find($typerequete_id);   
        $typerequete->numero = $request['numero_edit'];
        $typerequete->type = $request['type_edit'];
        $typerequete->type_en = $request['type_en_edit'];
        $typerequete->type_ar = $request['type_ar_edit'];
        $typerequete->save();// = $request['numero_edit'];
        return redirect()->route('typerequete.index')->with('success', 'Inséré avec succés ');        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Typerequete  $typerequete
     * @return \Illuminate\Http\Response
     */
    public function destroy($typerequete_id)
    {
        $typerequete = Typerequete::find($typerequete_id);   
        $typerequete->delete();// = $request['numero'];
        return redirect()->route('typerequete.index')->with('success', 'Inséré avec succés ');        

    }
}
