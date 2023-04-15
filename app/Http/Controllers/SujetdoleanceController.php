<?php

namespace App\Http\Controllers;

use App\Administration;
use App\Secteur;
use App\Typedoleance;
use App\Sujetdoleance;
use Illuminate\Http\Request;

class SujetdoleanceController extends Controller
{
    public function index()
    {
        $sujetdoleances = Sujetdoleance::all();
        
        $typedoleances = Typedoleance::all();
        $secteurs = Secteur::all();
        $administrations = Administration::all();
        return view('sujetdoleances.index',compact('sujetdoleances','administrations','secteurs','typedoleances'));
    }

    public function store(Request $request)
    {
        $sujetdoleance = new Sujetdoleance();   
        $sujetdoleance->secteur = $request['secteur'];
        $sujetdoleance->administration = $request['administration'];
        $sujetdoleance->type = $request['type'];
        $sujetdoleance->type_en = $request['type_en'];
        $sujetdoleance->type_ar = $request['type_ar'];
        $sujetdoleance->numero = $request['numero'];
        
        
        $sujetdoleance->typedoleance = $request['typedoleance'];
        $sujetdoleance->save();
        return redirect()->route('sujetdoleance.index')->with('success', 'Inséré avec succés ');        
    }


    public function update(Request $request, $sujetdoleance_id)
    {
        $sujetdoleance = Sujetdoleance::find($sujetdoleance_id);   
        $sujetdoleance->numero = $request['numero'];
        $sujetdoleance->type = $request['type'];
        $sujetdoleance->save();
        return redirect()->route('sujetdoleance.index')->with('success', 'Inséré avec succés ');
    }

    public function destroy($sujetdoleance_id)
    {
        $sujetdoleance = Sujetdoleance::find($sujetdoleance_id);   
        $sujetdoleance->delete();
        return redirect()->route('sujetdoleance.index')->with('success', 'Inséré avec succés ');        

    }

}
