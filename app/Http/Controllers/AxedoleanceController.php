<?php

namespace App\Http\Controllers;

use App\Axedoleance;
use App\Secteur;
use App\Sujetdoleance;
use Illuminate\Http\Request;
use Random\Engine\Secure;

class AxedoleanceController extends Controller
{
    public function index()
    {
        $axedoleances = Axedoleance::all();
        $secteurs = Secteur::all();
        $sujetdoleances = Sujetdoleance::all();
        return view('axedoleances.index',compact('axedoleances','secteurs','sujetdoleances'));
    }

    public function store(Request $request)
    {
        $axedoleance = new Axe();   
        $axedoleance->secteur = 1;//$request['secteur'];
        $axedoleance->sujet = $request['sujet'];
        $axedoleance->type = $request['type'];
        $axedoleance->type_en = $request['type_en'];
        $axedoleance->type_ar = $request['type_ar'];
        
        
        $axedoleance->save();
        return redirect()->route('axedoleance.index')->with('success', 'Inséré avec succés ');        

    }


    public function update(Request $request, $axedoleance_id)
    {
        $axedoleance = Axedoleance::find($axedoleance_id);   
        // $axedoleance->numero = $request['numero'];   
        $axedoleance->sujet = $request['sujet_edit'];
        $axedoleance->type = $request['type_edit'];
        $axedoleance->save();
        return redirect()->route('axedoleance.index')->with('success', 'Inséré avec succés ');        

    }

    public function destroy($axedoleance_id)
    {
        $axedoleance = Secteur::find($axedoleance_id);   
        $axedoleance->delete();
        return redirect()->route('axedoleance.index')->with('success', 'Inséré avec succés ');        

    }    
}
