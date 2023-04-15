<?php

namespace App\Http\Controllers;

use App\Souscategorie;
use App\Soussouscategorie;
use App\Categorie;
use Illuminate\Http\Request;

class SoussouscategorieController extends Controller
{
    public function index()
    {
        $soussouscategories = Soussouscategorie::all();
        $categories = Categorie::all();
        $souscategories = Souscategorie::all();
        return view('soussouscategories.index',compact('categories','soussouscategories','souscategories'));
    }

    public function store(Request $request)
    {
        // dd($request['categorie']);
        $soussouscategorie = new Soussouscategorie([
            'label' => $request['label'],
            'categorie' => $request['categorie'],
            'souscategorie' => $request['souscategorie'],

        ]);
        $soussouscategorie->save();    
        return redirect()->route('soussouscategorie.index')->with('success', 'inserted successfuly ! ');
    }
    public function destroy($souscategorie)
    {
        $souscategorie = Soussouscategorie::find($souscategorie);
        $souscategorie->delete();
        return redirect()->route('soussoussouscategorie.index')
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
        $souscategorie = Soussouscategorie::find($request['id_categorie']);
        $souscategorie->label = $request['categorie'];
        // $souscategorie->icon = $request['icon'];
        if($request->file('icon')){
            $file = $request->file('icon');// as $image){
                $icon = $file->store(
                    'soussouscategories/icon',
                    'public'
                );
                
                $souscategorie->icon = $icon;     
            }


        if($request->file('image')){
            $file = $request->file('image');
                $image = $file->store(
                    'soussouscategories/images',
                    'public'
                );
                $souscategorie->image = $image;     
        }
        $souscategorie->save();
        return redirect()->route('soussoussouscategorie.index')->with('success', 'edited  successfuly ! ');
   }

}
