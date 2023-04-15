<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Administration;
use App\Sousadministration;
use App\Soussousadministration;
use App\Soussoussousadministration;
use App\Secteur;
use App\Wilaya;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function index()
    {
        $administrations = Administration::all();
        $secteurs = Secteur::all();
        // $wilayas = Wilaya::all();
        return view('administrations.index',compact('administrations','secteurs'));
    }

    public function store(Request $request)
    {
        // $type = substr($request['parent'],0,-1);
        $elts = explode("_", $request['parent']);
        $type = $elts[0];


        if($type=="soussousadministration"){
            $soussoussousadministration = new Soussoussousadministration();   
            $soussoussousadministration->soussousadministration =  $elts[1];
            // $soussoussousadministration->type = $request['type'];
            $soussoussousadministration->label = $request['type'];
            $soussoussousadministration->type_en = $request['type_en'];

            
            $soussoussousadministration->save();
        }

        if($type=="sousadministration"){
            $soussousadministration = new Soussousadministration();   
            $soussousadministration->sousadministration =  $elts[1];
            
            $soussousadministration->label = $request['type'];
            $soussousadministration->type_en = $request['type_en'];

            
            $soussousadministration->save();
        }



        if($type=="administration"){
            $sousadministration = new Sousadministration();   
            $sousadministration->administartion =  $elts[1];
            // $sousadministration->type = $request['type'];
            $sousadministration->label = $request['type'];
            $sousadministration->type_en = $request['type_en'];

            
            $sousadministration->save();

        }
        if(is_null($request['parent'])){
            // dd($request['secteur'],$request['type']);
            $check = Administration::where(['secteur'=>$request['secteur'],'type'=>$request['type']])->get();
            // dd(count($check));
            if(count($check)>0){
                return redirect()->back()->with('error', 'Meme administration crée deux fois ');
            }
            $administration = new Administration();   
            // $administration->type = $request['type'];
            $administration->type = $request['type'];
            $administration->type_ar = $request['type_ar'];
            $administration->type_en = $request['type_en'];
            $administration->secteur = $request['secteur'];
            $administration->numero = $request['numero'];
            $administration->save();
        }
        return redirect()->back()->with('success', 'inserted successfuly ! ');

    }


    public function update(Request $request, $administration_id)
    {
        $administration = Administration::find($administration_id);   
        $administration->type = $request['type_edit'];
        $administration->type_ar = $request['type_ar_edit'];
        $administration->type_en = $request['type_en_edit'];

        $administration->secteur = $request['secteur_edit'];
        $administration->numero = $request['numero_edit'];
        $administration->save();
        return redirect()->route('administration.index')->with('success', 'Inséré avec succés ');        
    }

    public function destroy($administration_id)
    {
        $administration = Administration::find($administration_id);   
        $administration->delete();
        return redirect()->route('administration.index')->with('success', 'Inséré avec succés ');        

    }

}
