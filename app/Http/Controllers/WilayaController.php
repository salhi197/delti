<?php

namespace App\Http\Controllers;


use App\Wilaya;
use Illuminate\Http\Request;

class WilayaController extends Controller
{
 
    public function index()
    {
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        return view('wilayas.index',compact('wilayas'));
    }

    public function store(Request $request)
    {
        $wilaya = new Wilaya();
        $wilaya->name = $request['nom'];
        $wilaya->type_ar = $request['nom_fr'];
        $wilaya->type_en = $request['nom_en'];
        $wilaya->numero = $request['code'];
        $wilaya->save();
        return redirect()->route('wilaya.index')->with('success', 'inserted successfuly ! ');
    }

    
    public function update(Request $request,$wilaua_id)
    {
        // dd($request['nom_en_edit'],$request['nom_ar_edit']);
        $wilaya = Wilaya::find($wilaua_id);
        $wilaya->name = $request['nom_edit'];
        $wilaya->numero = $request['numero_edit'];
        $wilaya->type_ar = $request['nom_ar_edit'];
        $wilaya->type_en = $request['nom_en_edit'];

        $wilaya->save();
        return redirect()->route('wilaya.index')->with('success', 'Updated successfuly ! ');
    }

    public function destroy($wilaya)
    {
        $wilaya = Wilaya::find($wilaya);
        $wilaya->delete();
        return redirect()->route('wilaya.index')
            ->with('success', 'supprimé avec succé !');
    }

    // 023602426
    // 0561 66 45 17
}
