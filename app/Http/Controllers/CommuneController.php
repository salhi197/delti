<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Wilaya;
use App\Daira;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    public function index()
    {
        $communes = Commune::all();
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        $dairas = Daira::orderBy('numero','asc')->get();
        // $dairas = Daira::all();
        return view('communes.index',compact('communes','wilayas','dairas'));
    }

    public function store(Request $request)
    {
        $commune = new Commune();
        $commune->name = $request['nom'];
        $commune->name_ar = $request['nom_ar'];
        $commune->name_en = $request['nom_en'];
        $commune->numero = $request['code'];
        $commune->wilaya = $request['wilaya'];
        $commune->daira = $request['daira'];
        $commune->save();
        return redirect()->route('commune.index')->with('success', 'inserted successfuly ! ');
    }



    public function update(Request $request, $commune_id)
    {
        $commune = Commune::find($commune_id);   
        $commune->name = $request['nom_edit'];
        $commune->name_ar = $request['nom_ar_edit'];
        $commune->name_en = $request['nom_en_edit'];
        $commune->numero = $request['code_edit'];
        $commune->wilaya = $request['wilaya_edit'];
        $commune->daira = $request['daira_edit'];

        $commune->save();
        return redirect()->route('commune.index')->with('success', 'Inséré avec succés ');        
    }

    public function destroy($commune_id)
    {
        $commune = Commune::find($commune_id);   
        $commune->delete();
        return redirect()->route('commune.index')->with('success', 'Inséré avec succés ');        

    }

}
