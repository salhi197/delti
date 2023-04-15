<?php

namespace App\Http\Controllers;

use App\Axe;
use App\Secteur;
use App\Sujetrequete;
use Illuminate\Http\Request;
use Random\Engine\Secure;

class AxeController extends Controller
{
    public function index()
    {
        $axes = Axe::all();
        $secteurs = Secteur::all();
        $sujetrequetes = Sujetrequete::all();
        return view('axes.index',compact('axes','secteurs','sujetrequetes'));
    }

    public function store(Request $request)
    {
        $axe = new Axe();   
        $axe->secteur = 1;//$request['secteur'];
        $axe->sujet = $request['sujet'];
        $axe->type = $request['type'];
        $axe->numero = $request['numero'];
        $axe->type_en = $request['type_en'];
        $axe->type_ar = $request['type_ar'];

        $axe->save();
        return redirect()->route('axe.index')->with('success', 'Inséré avec succés ');        

    }


    public function update(Request $request, $axe_id)
    {
        $axe = Axe::find($axe_id);   
        // $axe->numero = $request['numero'];   
        $axe->sujet = $request['sujet_edit'];
        $axe->type = $request['type_edit'];
        $axe->type_en = $request['type_en_edit'];
        $axe->type_ar = $request['type_ar_edit'];

        $axe->numero = $request['numero_edit'];

        $axe->save();
        return redirect()->route('axe.index')->with('success', 'Modifié avec succés ');        

    }

    public function destroy($axe_id)
    {
        $axe = Axe::find($axe_id);   
        $axe->delete();
        return redirect()->route('axe.index')->with('success', 'Supprimé avec succés ');        

    }    
}
