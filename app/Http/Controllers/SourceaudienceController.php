<?php

namespace App\Http\Controllers;

use App\Sourceaudience;
use Illuminate\Http\Request;

class SourceaudienceController extends Controller
{
    public function index()
    {
        $sourceaudiences = Sourceaudience::all();
        return view('sourceaudiences.index',compact('sourceaudiences'));
    }

    public function store(Request $request)
    {
        $sourceaudience = new Sourceaudience();   
        // $sourceaudience->numero = $request['numero'];
        $sourceaudience->type = $request['type'];
        $sourceaudience->type_en = $request['type_en'];
        $sourceaudience->type_ar = $request['type_ar'];
        $sourceaudience->premierelettre = $request['premierelettre'];
        $sourceaudience->numero = $request['numero'];
        $sourceaudience->save();
        return redirect()->route('sourceaudience.index')->with('success', 'Inséré avec succés ');        

    }


    public function update(Request $request, $sourceaudience_id)
    {
        $sourceaudience = Sourceaudience::find($sourceaudience_id);   
        $sourceaudience->type = $request['type_edit'];
        $sourceaudience->type_en = $request['type_en_edit'];
        $sourceaudience->type_ar = $request['type_ar_edit'];
        $sourceaudience->premierelettre = $request['premierelettre_edit'];
        $sourceaudience->numero = $request['numero_edit'];

        $sourceaudience->save();
        return redirect()->route('sourceaudience.index')->with('success', 'Inséré avec succés ');        

    }

    public function destroy($sourceaudience_id)
    {
        $sourceaudience = Sourceaudience::find($sourceaudience_id);   
        $sourceaudience->delete();
        return redirect()->route('sourceaudience.index')->with('success', 'Inséré avec succés ');        

    }



}
