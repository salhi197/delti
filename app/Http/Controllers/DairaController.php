<?php

namespace App\Http\Controllers;

use App\Daira;
use App\Wilaya;
use Illuminate\Http\Request;

class DairaController extends Controller
{
    public function index()
    {
        $dairas = Daira::all();
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        return view('dairas.index',compact('dairas','wilayas'));
    }

    public function store(Request $request)
    {
        $daira = new Daira();   
        $daira->nom    =    $request['nom'];
        $daira->nom_ar = $request['nom_ar'];
        $daira->nom_en = $request['nom_en'];
        $daira->wilaya = $request['wilaya'];
        $daira->numero = $request['code'];
        $daira->save();
        return redirect()->route('daira.index')->with('success', 'Inséré avec succés ');        

    }


    public function update(Request $request, $daira_id)
    {
        $daira = Daira::find($daira_id);   
        $daira->nom    =    $request['nom_edit'];
        $daira->nom_ar = $request['nom_ar_edit'];
        $daira->nom_en = $request['nom_en_edit'];
        $daira->wilaya = $request['wilaya_edit'];
        $daira->numero = $request['code_edit'];
        $daira->save();
        return redirect()->route('daira.index')->with('success', 'Inséré avec succés ');        

    }

    public function destroy($daira_id)
    {
        $daira = Daira::find($daira_id);   
        $daira->delete();
        return redirect()->route('daira.index')->with('success', 'Inséré avec succés ');        

    }

}
