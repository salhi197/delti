<?php

namespace App\Http\Controllers;

use App\Administration;
use App\Secteur;
use App\Typerequete;
use App\Sujetrequete;
use Illuminate\Http\Request;

class SujetrequeteController extends Controller
{
    public function index()
    {
        $sujetrequetes = Sujetrequete::all();
        $typerequetes = Typerequete::all();
        $secteurs = Secteur::orderBy('numero','asc')->get();
        $administrations = Administration::all();

        return view('sujetrequetes.index',compact('sujetrequetes','administrations','secteurs','typerequetes'));
    }

    public function store(Request $request)
    {
        $sujetrequete = new Sujetrequete();   
        $sujetrequete->secteur = $request['secteur'];
        $sujetrequete->administration = $request['administration'];
        $sujetrequete->type = $request['type'];
        $sujetrequete->type_en = $request['type_en'];
        $sujetrequete->type_ar = $request['type_ar'];
        $sujetrequete->numero = $request['numero'];
        
        $sujetrequete->typerequete = $request['typerequete'];
        $sujetrequete->save();
        return redirect()->route('sujetrequete.index')->with('success', 'Inséré avec succés ');        
    }


    public function update(Request $request, $sujetrequete_id)
    {
        $sujetrequete = Sujetrequete::find($sujetrequete_id);   
        $sujetrequete->numero = $request['numero'];
        $sujetrequete->type = $request['type'];
        $sujetrequete->type_en = $request['type_en'];
        $sujetrequete->save();
        return redirect()->route('sujetrequete.index')->with('success', 'Inséré avec succés ');        

    }

    public function destroy($sujetrequete_id)
    {
        $sujetrequete = Sujetrequete::find($sujetrequete_id);   
        $sujetrequete->delete();
        return redirect()->route('sujetrequete.index')->with('success', 'Inséré avec succés ');        

    }

}
