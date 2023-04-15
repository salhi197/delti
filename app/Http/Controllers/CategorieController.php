<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use App\Commune;
use App\Categorie;
use App\Souscategorie;
use App\Soussouscategorie;
use App\Wilaya;
use App\Sub;
use Response;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
 
    public function index($source)
    {
        $categories = Categorie::where('source',$source)->get();
        return view('categories.index',compact('categories','source'));
    }

    public function store(Request $request)
    {   
        // $type = substr($request['parent'],0,-1);
        $elts = explode("_", $request['parent']);
        $type = $elts[0];

        if($type=="souscategorie"){
            $soussouscategorie = new Soussouscategorie([
                'label' => $request['label'],
                'source' => $request['source'],
                'categorie' => Souscategorie::find($elts[1])['categorie'],
                'souscategorie' => $elts[1]
            ]);
            $soussouscategorie->save();    
        }

        if($type=="categorie"){
            // dd($elts[1]);
            $souscategorie = new Souscategorie([
                'label' => $request['label'],
                'source' => $request['source'],
                'categorie' => $elts[1]
            ]);
            $souscategorie->save();    
        }
        if(is_null($request['parent'])){
            $categorie = new Categorie([
                'label' => $request['label'],
                'type_en' => $request['type_en'],
                'type_ar' => $request['type_ar'],
                'numero' => $request['numero'],
                'source' => $request['source'],
            ]);
            $categorie->save();    
        }
        return redirect()->back()->with('success', 'inserted successfuly ! ');

    }
    public function destroy($categorie)
    {
        $categorie = Categorie::find($categorie);
        $categorie->delete();
        return redirect()->back()
            ->with('success', 'supprimé avec succé !');
    }
    /**
     * 
     */
    public function update(Request $request,$id_categorie)
    {
        $categorie = Categorie::find($id_categorie);
        $categorie->label = $request['label_edit'];
        $categorie->type_en = $request['type_en_edit'];
        $categorie->type_ar = $request['type_ar_edit'];
        $categorie->numero = $request['numero_edit'];
        $categorie->save();
        return redirect()->back()->with('success', 'Modifié avecc Succés ! ');
   }
}
