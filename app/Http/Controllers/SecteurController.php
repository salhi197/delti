<?php

namespace App\Http\Controllers;

use App\Secteur;
use Illuminate\Http\Request;
use Random\Engine\Secure;

class SecteurController extends Controller
{
    public function index()
    {
        $secteurs = Secteur::orderBy('numero','asc')->get();
        return view('secteurs.index',compact('secteurs'));
    }

    public function store(Request $request)
    {
        $secteur = new Secteur();
        $secteur->numero = $request['numero'];
        $secteur->type = $request['type'];
        $secteur->type_en = $request['type_en'];
        $secteur->type_ar = $request['type_ar'];
        $secteur->save();
        return redirect()->route('secteur.index')->with('success', 'Inséré avec succés ');        
    }


    public function update(Request $request, $secteur_id)
    {
        $secteur = Secteur::find($secteur_id);
        $secteur->numero = $request['numero_edit'];
        $secteur->type = $request['type_edit'];
        $secteur->type_en = $request['type_en_edit'];
        $secteur->type_ar = $request['type_ar_edit'];

        $secteur->save();
        return redirect()->route('secteur.index')->with('success', 'Inséré avec succés ');        

    }

    public function destroy($secteur_id)
    {
        $secteur = Secteur::find($secteur_id);   
        $secteur->delete();
        return redirect()->route('secteur.index')->with('success', 'Inséré avec succés ');        

    }    
}
