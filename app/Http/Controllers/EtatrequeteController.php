<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Etatrequete;
use Illuminate\Http\Request;

class EtatrequeteController extends Controller
{
    public function index()
    {
        $etatrequetes = Etatrequete::all();
        $categories = Categorie::all();
        $souscategories = Categorie::all();
        return view('etatrequetes.index',compact('etatrequetes','categories','souscategories'));
    }

    public function store(Request $request)
    {
        $etatrequete = new Etatrequete();   
        // $etatrequete->numero = $request['numero'];
        $etatrequete->type = $request['type'];
        $etatrequete->type_en = $request['type_en'];
        $etatrequete->type_ar = $request['type_ar'];
        
        
        $etatrequete->categorie = $request['categorie'];
        $etatrequete->souscategorie = $request['souscategorie'];
        $etatrequete->save();
        return redirect()->route('etatrequete.index')->with('success', 'Inséré avec succés ');        

    }


    public function update(Request $request, $etatrequete_id)
    {
        $etatrequete = Etatrequete::find($etatrequete_id);   
        // $etatrequete->numero = $request['numero'];
        $etatrequete->type = $request['type'];
        $etatrequete->save();
        return redirect()->route('etatrequete.index')->with('success', 'Inséré avec succés ');        

    }

    public function destroy($etatrequete_id)
    {
        $etatrequete = Etatrequete::find($etatrequete_id);   
        $etatrequete->delete();
        return redirect()->route('etatrequete.index')->with('success', 'Inséré avec succés ');        

    }

}
