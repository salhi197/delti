<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use App\Commune;
use App\Souscategorie;
use App\Categorie;
use App\Sub;
use Response;
use Illuminate\Http\Request;

class SouscategorieController extends Controller
{
 
    public function index()
    {
        $souscategories = Souscategorie::all();
        $categories = Categorie::all();
        return view('souscategories.index',compact('categories','souscategories'));
    }

    public function store(Request $request)
    {
        $souscategorie = new Souscategorie([
            'label' => $request['label'],
            'categorie' => $request['categorie'],
        ]);
        $souscategorie->save();    
        return redirect()->route('souscategorie.index')->with('success', 'inserted successfuly ! ');
    }
    public function destroy($souscategorie)
    {
        $souscategorie = Souscategorie::find($souscategorie);
        $souscategorie->delete();
        return redirect()->route('souscategorie.index')
            ->with('success', 'supprimé avec succé !');
    }
    /**
     * 
     */

     public function SousstoreAjax(Request $request)
     {
        if($request->ajax()){
            $array = $request['data'];        
            $data=  array();
            parse_str($array, $data);        
            $souscategorie = new Categorie([
                'label' => $data['label'],
                'categorie'=>$data['categorie']
            ]);
            $souscategorie->save();    
            $response = array(
                'categorie' => $data,
                'msg' => 'catégorie ajouté',
            );
            return Response::json($response);
        }
    }
    public function update(Request $request)
    {
        $souscategorie = Souscategorie::find($request['id_categorie']);
        $souscategorie->label = $request['categorie'];
        // $souscategorie->icon = $request['icon'];
        if($request->file('icon')){
            $file = $request->file('icon');// as $image){
                $icon = $file->store(
                    'souscategories/icon',
                    'public'
                );
                
                $souscategorie->icon = $icon;     
            }


        if($request->file('image')){
            $file = $request->file('image');
                $image = $file->store(
                    'souscategories/images',
                    'public'
                );
                $souscategorie->image = $image;     
        }
        $souscategorie->save();
        return redirect()->route('souscategorie.index')->with('success', 'edited  successfuly ! ');
   }
}
