<?php

namespace App\Http\Controllers;

use App\Sourcerequete;
use Illuminate\Http\Request;

class SourcerequeteController extends Controller
{
    public function index()
    {
        $sourcerequetes = Sourcerequete::all();
        return view('sourcerequetes.index',compact('sourcerequetes'));
    }

    public function store(Request $request)
    {
        
        $sourcerequete = new Sourcerequete();   
        $sourcerequete->numero = $request['numero'];
        $sourcerequete->type = $request['type'];
        $sourcerequete->premierelettre = $request['premierelettre'];
        $sourcerequete->save();
        return redirect()->back()->with('success', 'Inséré avec succés ');        

    }


    public function update(Request $request, $sourcerequete_id)
    {
        $sourcerequete = Sourcerequete::find($sourcerequete_id);   
        $sourcerequete->numero = $request['numero_edit'];
        $sourcerequete->type = $request['type_edit'];
        $sourcerequete->premierelettre = $request['premierelettre_edit'];
        $sourcerequete->save();
        return redirect()->route('sourcerequete.index')->with('success', 'Inséré avec succés ');        

    }

    public function destroy($sourcerequete_id)
    {
        $sourcerequete = Sourcerequete::find($sourcerequete_id);   
        $sourcerequete->delete();
        return redirect()->route('sourcerequete.index')->with('success', 'Inséré avec succés ');        

    }



}
